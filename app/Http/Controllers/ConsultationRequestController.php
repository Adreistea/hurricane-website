<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        // Create the consultation request
        $consultationRequest = ConsultationRequest::create($data);

        // You can add email notification logic here
        // \Mail::to('admin@example.com')->send(new \App\Mail\NewConsultationRequest($consultationRequest));

        return response()->json([
            'success' => true,
            'message' => 'Consultation request submitted successfully!',
            'data' => $consultationRequest
        ], 201);
    }
}
