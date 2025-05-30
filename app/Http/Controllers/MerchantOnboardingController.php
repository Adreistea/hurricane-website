<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\BusinessDetails;
use App\Models\OwnerInformation;
use App\Models\SystemConfiguration;
use App\Models\BusinessProfile;
use App\Models\PaymentDetails;
use App\Models\SelectedBundle;
use App\Models\HandheldFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class MerchantOnboardingController extends Controller
{
    /**
     * Store the merchant onboarding information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Start a database transaction
            DB::beginTransaction();

            // 1. Create Merchant record
            $merchant = Merchant::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'business_name' => $request->business_name,
                'phone_number' => $request->phone_number,
                'business_email' => $request->business_email,
                'monthly_volume' => $request->monthly_volume,
                'average_sale' => $request->average_sale,
                'high_ticket' => $request->high_ticket,
                'privacy_agreement' => $request->privacy_agreement,
            ]);

            // 2. Create Business Details if data is provided
            if ($request->has('business_entity_type')) {
                BusinessDetails::create([
                    'merchant_id' => $merchant->id,
                    'business_entity_type' => $request->business_entity_type,
                    'industry_type' => $request->industry_type,
                    'dba' => $request->dba,
                    'product_service' => $request->product_service,
                    'business_phone' => $request->business_phone,
                    'year_started' => $request->year_started,
                    'website' => $request->website,
                    'address_line1' => $request->address_line1,
                    'address_line2' => $request->address_line2,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'building_type' => $request->building_type,
                    'merchant_status' => $request->merchant_status,
                    'area_zoned' => $request->area_zoned,
                    'square_footage' => $request->square_footage,
                    'routing_number_1' => $request->routing_number_1,
                    'account_number_1' => $request->account_number_1,
                    'bank_account_1_purpose' => $request->bank_account_1_purpose,
                    'bank_account_1_other_description' => $request->bank_account_1_other_description,
                    'routing_number_2' => $request->routing_number_2,
                    'account_number_2' => $request->account_number_2,
                    'bank_account_2_purpose' => $request->bank_account_2_purpose,
                    'bank_account_2_other_description' => $request->bank_account_2_other_description,
                    'refund_return_policy' => $request->refund_return_policy,
                    // E-commerce and MOTO fields
                    'inventory_maintained' => $request->inventory_maintained,
                    'inventory_off_site_address' => $request->inventory_off_site_address,
                    'has_fulfillment_center' => $request->inventory_maintained === '3RD PARTY FULFILLMENT CENTER',
                    'fulfillment_agreement_file' => $request->fulfillment_agreement_file,
                    'service_only_no_products' => $request->inventory_maintained === 'SERVICE ONLY',
                    'other_companies_involved_shipping' => $request->other_companies_involved_shipping,
                    'other_companies_fulfillment_details' => $request->other_companies_fulfillment_details,
                    'other_companies_agreement_provided' => $request->other_companies_agreement_provided ?? false,
                ]);
            }

            // 3. Create Owner Information if data is provided
            if ($request->has('owner_first_name')) {
                OwnerInformation::create([
                    'merchant_id' => $merchant->id,
                    'owner_first_name' => $request->owner_first_name,
                    'owner_last_name' => $request->owner_last_name,
                    'title' => $request->title,
                    'date_of_birth' => $request->date_of_birth,
                    'ownership_percentage' => $request->ownership_percentage,
                    'drivers_license' => $request->drivers_license,
                    'dl_state' => $request->dl_state,
                    'owner_phone' => $request->owner_phone,
                    'home_address_line1' => $request->home_address_line1,
                    'home_address_line2' => $request->home_address_line2,
                    'city' => $request->city,
                    'home_state' => $request->home_state,
                    'home_zip' => $request->home_zip,
                    'ssn' => $request->ssn,
                ]);
            }

            // 4. Create System Configuration if data is provided
            if ($request->has('number_of_locations')) {
                SystemConfiguration::create([
                    'merchant_id' => $merchant->id,
                    'number_of_locations' => $request->number_of_locations,
                    'number_of_registers' => $request->number_of_registers,
                    'number_of_servers' => $request->number_of_servers,
                    'handhelds_needed' => $request->handhelds_needed,
                    'number_of_handhelds' => $request->number_of_handhelds,
                    'customer_displays_needed' => $request->customer_displays_needed,
                    'additional_requirements' => $request->additional_requirements,
                ]);
            }

            // 5. Create Business Profile if data is provided
            if ($request->has('profile_type')) {
                BusinessProfile::create([
                    'merchant_id' => $merchant->id,
                    'profile_type' => $request->profile_type,
                    'current_pos_status' => $request->current_pos_status,
                    'order_management_method' => $request->order_management_method,
                    'customer_engagement_tools' => $request->customer_engagement_tools,
                    'staff_confidence' => $request->staff_confidence,
                    'technical_support' => $request->technical_support,
                    'complete_solution_response' => $request->complete_solution_response,
                ]);
            }

            // 6. Create Payment Details if data is provided
            if ($request->has('signature_name')) {
                PaymentDetails::create([
                    'merchant_id' => $merchant->id,
                    'payment_method' => $request->payment_method,
                    'terms_agreement' => $request->terms_agreement,
                    'signature_name' => $request->signature_name,
                    'signature_data' => $request->signature_data,
                    'signature_date' => $request->signature_date,
                    'total_amount' => $request->total_amount ?? 0,
                ]);
            }

            // 7. Create Selected Bundles if data is provided
            if ($request->has('cartItems') && is_array($request->cartItems)) {
                foreach ($request->cartItems as $item) {
                    SelectedBundle::create([
                        'merchant_id' => $merchant->id,
                        'bundle_name' => $item['name'],
                        'price' => $this->extractNumericPrice($item['price']),
                        'quantity' => $item['quantity'] ?? 1,
                    ]);
                }
            }

            // 8. Create Handheld Features if data is provided
            if ($request->has('handheld_features') && is_array($request->handheld_features)) {
                foreach ($request->handheld_features as $feature) {
                    HandheldFeature::create([
                        'merchant_id' => $merchant->id,
                        'feature' => $feature,
                    ]);
                }
            }

            // If everything went well, commit the transaction
            DB::commit();

            // Submit to external API
            $apiResponse = $this->submitToAPI($request->all(), $merchant->id);
            
            // Check if API submission was successful
            if ($apiResponse['status'] === 'error') {
                Log::warning('Merchant onboarding saved locally but API submission failed', [
                    'merchant_id' => $merchant->id,
                    'api_error' => $apiResponse['message']
                ]);
                
                return response()->json([
                    'success' => true,
                    'warning' => 'Your application was saved but there was an issue submitting to our processing system. Our team will review and process it manually.',
                    'message' => 'Merchant onboarding completed with warnings',
                    'merchant_id' => $merchant->id,
                    'data' => $request->all(),
                    'api_response' => $apiResponse
                ], 201);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Merchant onboarding completed successfully!',
                'merchant_id' => $merchant->id,
                'data' => $request->all(),
                'api_response' => $apiResponse
            ], 201);

        } catch (\Exception $e) {
            // If an error occurred, rollback the transaction
            DB::rollBack();
            Log::error('Merchant onboarding error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ], 500);
        }
    }

    /**
     * Extract numeric price from formatted price string.
     *
     * @param  string  $price
     * @return float
     */
    private function extractNumericPrice($price)
    {
        // Remove currency symbols, commas, etc. and convert to float
        return (float) preg_replace('/[^0-9.]/', '', $price);
    }

    /**
     * Submit merchant data to external API.
     *
     * @param  array  $data
     * @param  int    $merchantId
     * @return array
     */
    private function submitToAPI($data, $merchantId)
    {
        try {
            // Log request data for debugging
            Log::info('Submitting to external API: https://crm.hurricanepayments.com/api/merchant-onboarding');
            
            // Use the exact format from the example JSON, with all fields at the root level
            // We're not nesting anything here to match the expected format
            $apiData = [
                // Basic merchant information
                'first_name' => $data['first_name'] ?? null,
                'last_name' => $data['last_name'] ?? null,
                'business_name' => $data['business_name'] ?? null,
                'phone_number' => $data['phone_number'] ?? null,
                'business_email' => $data['business_email'] ?? null,
                'monthly_volume' => $data['monthly_volume'] ?? null,
                'average_sale' => $data['average_sale'] ?? null,
                'high_ticket' => $data['high_ticket'] ?? null,
                'privacy_agreement' => $data['privacy_agreement'] ?? false,

                // Business details as nested object
                'business_details' => [
                    'business_entity_type' => $data['business_entity_type'] ?? null,
                    'industry_type' => $data['industry_type'] ?? null,
                    'dba' => $data['dba'] ?? null,
                    'product_service' => $data['product_service'] ?? null,
                    'business_phone' => $data['business_phone'] ?? null,
                    'year_started' => $data['year_started'] ?? null,
                    'website' => $data['website'] ?? null,
                    'address_line1' => $data['address_line1'] ?? null,
                    'address_line2' => $data['address_line2'] ?? null,
                    'city' => $data['city'] ?? null,
                    'state' => $data['state'] ?? null,
                    'zip' => $data['zip'] ?? null,
                    'accept_visa_mastercard_discover' => $data['accept_visa_mastercard_discover'] ?? false,
                    'accept_amex_optblue' => $data['accept_amex_optblue'] ?? false,
                    'accept_amex_esa' => $data['accept_amex_esa'] ?? false,
                    'amex_esa_number' => $data['amex_esa_number'] ?? null,
                    'accept_pin_debit' => $data['accept_pin_debit'] ?? false,
                    'accept_ebt' => $data['accept_ebt'] ?? false,
                    'ebt_fns_number' => $data['ebt_fns_number'] ?? null,
                    'notes' => $data['notes'] ?? null,
                    'in_person_percentage' => $data['in_person_percentage'] ?? 90.00,
                    'mail_phone_percentage' => $data['mail_phone_percentage'] ?? 0.00,
                    'ecommerce_percentage' => $data['ecommerce_percentage'] ?? 10.00,
                    // Location fields
                    'building_type' => $data['building_type'] ?? null,
                    'merchant_status' => $data['merchant_status'] ?? null,
                    'area_zoned' => $data['area_zoned'] ?? null,
                    'square_footage' => $data['square_footage'] ?? null,
                    // Bank account fields
                    'routing_number_1' => $data['routing_number_1'] ?? null,
                    'account_number_1' => $data['account_number_1'] ?? null,
                    'bank_account_1_purpose' => $data['bank_account_1_purpose'] ?? null,
                    'bank_account_1_other_description' => $data['bank_account_1_other_description'] ?? null,
                    'routing_number_2' => $data['routing_number_2'] ?? null,
                    'account_number_2' => $data['account_number_2'] ?? null,
                    'bank_account_2_purpose' => $data['bank_account_2_purpose'] ?? null,
                    'bank_account_2_other_description' => $data['bank_account_2_other_description'] ?? null,
                    // Refund/Return Policy
                    'refund_return_policy' => $data['refund_return_policy'] ?? null,
                    // E-commerce and MOTO fields
                    'inventory_maintained' => $data['inventory_maintained'] ?? null,
                    'inventory_off_site_address' => $data['inventory_off_site_address'] ?? null,
                    'has_fulfillment_center' => ($data['inventory_maintained'] ?? '') === '3RD PARTY FULFILLMENT CENTER',
                    'fulfillment_agreement_file' => $data['fulfillment_agreement_file'] ?? null,
                    'service_only_no_products' => ($data['inventory_maintained'] ?? '') === 'SERVICE ONLY',
                    'other_companies_involved_shipping' => $data['other_companies_involved_shipping'] ?? null,
                    'other_companies_fulfillment_details' => $data['other_companies_fulfillment_details'] ?? null,
                    'other_companies_agreement_provided' => $data['other_companies_agreement_provided'] ?? false,
                ],

                // Owner information as nested object
                'owner_information' => [
                    'owner_first_name' => $data['owner_first_name'] ?? null,
                    'owner_last_name' => $data['owner_last_name'] ?? null,
                    'title' => $data['title'] ?? null,
                    'date_of_birth' => $data['date_of_birth'] ?? null,
                    'ownership_percentage' => $data['ownership_percentage'] ?? null,
                    'drivers_license' => $data['drivers_license'] ?? null,
                    'dl_state' => $data['dl_state'] ?? null,
                    'owner_phone' => $data['owner_phone'] ?? null,
                    'home_address_line1' => $data['home_address_line1'] ?? null,
                    'home_address_line2' => $data['home_address_line2'] ?? null,
                    'city' => $data['city'] ?? null,
                    'home_state' => $data['home_state'] ?? null,
                    'home_zip' => $data['home_zip'] ?? null,
                    'ssn' => $data['ssn'] ?? null,
                ],

                // System configuration as nested object
                'system_configuration' => [
                    'number_of_locations' => $data['number_of_locations'] ?? null,
                    'number_of_registers' => $data['number_of_registers'] ?? null,
                    'number_of_servers' => $data['number_of_servers'] ?? null,
                    'handhelds_needed' => $data['handhelds_needed'] ?? false,
                    'number_of_handhelds' => $data['number_of_handhelds'] ?? null,
                    'customer_displays_needed' => $data['customer_displays_needed'] ?? false,
                    'additional_requirements' => $data['additional_requirements'] ?? null,
                ],

                // Payment details as nested object
                'payment_details' => [
                    'payment_method' => $data['payment_method'] ?? null,
                    'terms_agreement' => $data['terms_agreement'] ?? false,
                    'signature_name' => $data['signature_name'] ?? null,
                    'signature_data' => $data['signature_data'] ?? null,
                    'signature_date' => $data['signature_date'] ?? null,
                    'total_amount' => $data['total_amount'] ?? null,
                ],
            ];
            
            // Include cartItems array if it exists
            if (isset($data['cartItems']) && is_array($data['cartItems'])) {
                $apiData['cartItems'] = $data['cartItems'];
            }
            
            // Include handheld_features array if it exists
            if (isset($data['handheld_features']) && is_array($data['handheld_features'])) {
                $apiData['handheld_features'] = $data['handheld_features'];
            }
            
            // Set the merchant ID reference
            $apiData['merchant_reference_id'] = $merchantId;
            
            // Log payload for debugging
            Log::info('API Request payload: ' . json_encode($apiData, JSON_PRETTY_PRINT));
            
            // Make API request with basic headers
            $response = Http::timeout(30)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ])
                ->post('https://crm.hurricanepayments.com/api/merchant-onboarding', $apiData);
            
            // Log detailed response
            Log::info('API response status: ' . $response->status());
            Log::info('API response body: ' . $response->body());
            
            // Handle API errors properly
            if (!$response->successful()) {
                $errorMessage = $response->json()['message'] ?? $response->body();
                Log::error('API submission failed', [
                    'status' => $response->status(),
                    'error' => $errorMessage,
                    'merchant_id' => $merchantId
                ]);
                
                // Return error status and message
                return [
                    'status' => 'error',
                    'message' => 'Failed to submit to CRM system. Error: ' . $errorMessage,
                    'code' => $response->status()
                ];
            }
            
            // Return success response
            return [
                'status' => 'success',
                'code' => $response->status(),
                'response' => $response->json() ?: $response->body()
            ];
            
        } catch (\Exception $e) {
            // Log the full error details
            Log::error('API submission error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'merchant_id' => $merchantId
            ]);
            
            // Return error status and message
            return [
                'status' => 'error',
                'message' => 'An error occurred while submitting to CRM: ' . $e->getMessage()
            ];
        }
    }
} 