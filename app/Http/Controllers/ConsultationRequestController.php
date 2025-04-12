<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ConsultationRequestController extends Controller
{
    /**
     * Store a newly created consultation request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'industry_type' => 'required|string|max:50',
            'num_locations' => 'nullable|integer|min:1',
            'num_terminals' => 'nullable|integer|min:0',
            'processing_volume' => 'nullable|string|max:50',
            'preferred_date' => 'required|date|after_or_equal:today',
            'start_hour' => 'required|string|max:2',
            'start_minute' => 'required|string|max:2',
            'start_period' => 'required|string|in:AM,PM',
            'end_hour' => 'required|string|max:2',
            'end_minute' => 'required|string|max:2',
            'end_period' => 'required|string|in:AM,PM',
            'time_zone' => 'required|string|max:10',
            'goal_fee_elimination' => 'boolean',
            'goal_pos' => 'boolean',
            'goal_mobile' => 'boolean',
            'goal_ecommerce' => 'boolean',
            'goal_integration' => 'boolean',
            'goal_funding' => 'boolean',
            'goal_other' => 'boolean',
            'other_goal_specification' => 'nullable|string|max:255',
            'integration_software' => 'nullable|string|max:255',
            'comments' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Set default status
        $data = $request->all();
        $data['status'] = 'pending';

        // Convert checkbox values to boolean if they come as strings
        $booleanFields = [
            'goal_fee_elimination', 'goal_pos', 'goal_mobile', 
            'goal_ecommerce', 'goal_integration', 'goal_funding', 'goal_other'
        ];

        foreach ($booleanFields as $field) {
            if (isset($data[$field])) {
                $data[$field] = filter_var($data[$field], FILTER_VALIDATE_BOOLEAN);
            } else {
                $data[$field] = false;
            }
        }

        try {
            // Create the consultation request in local database
            $consultationRequest = ConsultationRequest::create($data);

            // Format data for CRM API
            $crmData = [
                'full_name' => $data['full_name'],
                'business_name' => $data['business_name'],
                'phone_number' => $data['phone_number'],
                'email' => $data['email'],
                'industry_type' => $data['industry_type'],
                'num_locations' => $data['num_locations'],
                'num_terminals' => $data['num_terminals'],
                'processing_volume' => $data['processing_volume'],
                'preferred_date' => $data['preferred_date'],
                'start_hour' => $data['start_hour'],
                'start_minute' => $data['start_minute'],
                'start_period' => $data['start_period'],
                'end_hour' => $data['end_hour'],
                'end_minute' => $data['end_minute'],
                'end_period' => $data['end_period'],
                'time_zone' => $data['time_zone'],
                'goal_fee_elimination' => $data['goal_fee_elimination'],
                'goal_pos' => $data['goal_pos'],
                'goal_mobile' => $data['goal_mobile'],
                'goal_ecommerce' => $data['goal_ecommerce'],
                'goal_integration' => $data['goal_integration'],
                'goal_funding' => $data['goal_funding'],
                'goal_other' => $data['goal_other'],
                'other_goal_specification' => $data['other_goal_specification'],
                'integration_software' => $data['integration_software'],
                'comments' => $data['comments'],
                'source' => 'Website Consultation Request',
                'local_id' => $consultationRequest->id
            ];

            // Send to Hurricane Payments CRM API
            $response = Http::post('https://crm.hurricanepayments.com/api/consultation-requests', $crmData);

            if (!$response->successful()) {
                Log::error('Failed to push inquiry to CRM', [
                    'status' => $response->status(),
                    'response' => $response->json(),
                    'inquiry_id' => $consultationRequest->id
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Consultation request submitted successfully!',
                'data' => $consultationRequest
            ], 201);

        } catch (\Exception $e) {
            Log::error('Error creating consultation request', [
                'error' => $e->getMessage(),
                'data' => $data
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request. Please try again later.'
            ], 500);
        }
    }
}
