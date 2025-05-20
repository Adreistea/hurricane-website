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

            // Temporarily comment out API submission for testing
            // $apiResponse = $this->submitToAPI($request->all(), $merchant->id);
            
            return response()->json([
                'success' => true,
                'message' => 'Merchant onboarding completed successfully!',
                'merchant_id' => $merchant->id,
                'data' => $request->all() // Add this line to see what data was received
                // 'api_response' => $apiResponse // Comment this out
            ], 201);
        } catch (\Exception $e) {
            // If an error occurred, rollback the transaction
            DB::rollBack();
            Log::error('Merchant onboarding error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString()); // Add stack trace for better debugging

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(), // Add this for debugging
                'request_data' => $request->all() // Add this to see what data was sent
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
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'business_name' => $data['business_name'],
                'phone_number' => $data['phone_number'],
                'business_email' => $data['business_email'],
                'monthly_volume' => $data['monthly_volume'],
                'average_sale' => $data['average_sale'],
                'high_ticket' => $data['high_ticket'],
                'privacy_agreement' => $data['privacy_agreement'] ? true : false,
                
                // Business details
                'business_entity_type' => $data['business_entity_type'] ?? null,
                'industry_type' => $data['industry_type'] ?? null,
                'dba' => $data['dba'] ?? null,
                'product_service' => $data['product_service'] ?? null,
                'business_phone' => $data['business_phone'] ?? null,
                'year_started' => $data['year_started'] ?? null,
                'website' => $data['website'] ?? null,
                'address_line1' => $data['address_line1'] ?? null,
                'address_line2' => $data['address_line2'] ?? null,
                'state' => $data['state'] ?? null,
                'zip' => $data['zip'] ?? null,
                
                // Owner information
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
                
                // System configuration
                'number_of_locations' => $data['number_of_locations'] ?? null,
                'number_of_registers' => $data['number_of_registers'] ?? null,
                'number_of_servers' => $data['number_of_servers'] ?? null,
                'handhelds_needed' => isset($data['handhelds_needed']) ? (bool)$data['handhelds_needed'] : null,
                'number_of_handhelds' => $data['number_of_handhelds'] ?? null,
                'customer_displays_needed' => isset($data['customer_displays_needed']) ? (bool)$data['customer_displays_needed'] : null,
                'additional_requirements' => $data['additional_requirements'] ?? null,
                
                // Business profile
                'profile_type' => $data['profile_type'] ?? null,
                'current_pos_status' => $data['current_pos_status'] ?? null,
                'order_management_method' => $data['order_management_method'] ?? null,
                'customer_engagement_tools' => $data['customer_engagement_tools'] ?? null,
                'staff_confidence' => $data['staff_confidence'] ?? null,
                'technical_support' => $data['technical_support'] ?? null,
                'complete_solution_response' => $data['complete_solution_response'] ?? null,
                
                // Payment details
                'payment_method' => $data['payment_method'] ?? null,
                'terms_agreement' => isset($data['terms_agreement']) ? (bool)$data['terms_agreement'] : null,
                'signature_name' => $data['signature_name'] ?? null,
                'signature_data' => $data['signature_data'] ?? null,
                'signature_date' => $data['signature_date'] ?? null,
                'total_amount' => $data['total_amount'] ?? null,
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
            
            // Set headers and timeout
            $response = Http::timeout(30)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ])
                ->post('https://crm.hurricanepayments.com/api/merchant-onboarding', $apiData);
            
            // Log detailed response
            Log::info('API response status: ' . $response->status());
            Log::info('API response body: ' . $response->body());
            
            // Even if the API fails, don't show error to user since local data is saved
            if (!$response->successful()) {
                Log::error('API submission failed but continuing: ' . $response->body());
                return [
                    'status' => 'success',
                    'message' => 'Data saved successfully.'
                ];
            }
            
            return [
                'status' => 'success',
                'code' => $response->status(),
                'response' => $response->json() ?: $response->body()
            ];
        } catch (\Exception $e) {
            Log::error('API submission error: ' . $e->getMessage());
            
            // Even if API fails, return success since local data is saved
            return [
                'status' => 'success',
                'message' => 'Data saved successfully.'
            ];
        }
    }
} 