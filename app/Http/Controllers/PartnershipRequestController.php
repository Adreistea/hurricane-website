<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PartnershipRequestController extends Controller
{
    /**
     * Store a new partnership request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'companyName' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'website' => 'nullable|url|max:255',
            'partnershipType' => 'required|string|max:50',
            'proposal' => 'required|string',
            'referralSource' => 'required|string|max:50',
        ]);

        try {
            // Forward the request to the external CRM
            $response = Http::post('https://crm.hurricanepayments.com/api/partnership-requests', $validated);

            // Log the response for debugging
            Log::info('CRM response for partnership request', [
                'status' => $response->status(),
                'body' => $response->json()
            ]);

            // Check if the request was successful
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Partnership request submitted successfully',
                    'data' => $response->json()
                ]);
            }
            
            // If we reach here, there was an error with the external API
            return response()->json([
                'success' => false,
                'message' => 'Error submitting to CRM: ' . $response->body(),
            ], 500);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error forwarding partnership request to CRM', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error connecting to CRM system: ' . $e->getMessage(),
            ], 500);
        }
    }
} 