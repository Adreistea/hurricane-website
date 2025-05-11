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

            return response()->json([
                'success' => true,
                'message' => 'Merchant onboarding completed successfully!',
                'merchant_id' => $merchant->id
            ], 201);
        } catch (\Exception $e) {
            // If an error occurred, rollback the transaction
            DB::rollBack();
            Log::error('Merchant onboarding error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage()
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
} 