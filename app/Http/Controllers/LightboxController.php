<?php

namespace App\Http\Controllers;

use App\Models\Lightbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class LightboxController extends Controller
{
    /**
     * Display a listing of lightboxes.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $lightboxes = Lightbox::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'success' => true,
            'data' => $lightboxes
        ]);
    }

    /**
     * Store a newly created lightbox.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'header' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'status' => 'required|in:draft,active,inactive',
            'display_pages' => 'nullable|array',
            'close_on_overlay' => 'boolean',
            'show_once' => 'boolean',
            'show_on_exit' => 'boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'cta_text' => 'nullable|string|max:255',
            'cta_url' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Store in the public disk
            $imagePath = $image->storeAs('lightboxes', $imageName, 'public');
            
            // Set the correct path for the database
            $imagePath = 'storage/' . $imagePath;
        }

        // Create the lightbox
        $lightbox = Lightbox::create([
            'header' => $request->header,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
            'display_pages' => $request->display_pages,
            'close_on_overlay' => $request->close_on_overlay ?? true,
            'show_once' => $request->show_once ?? false,
            'show_on_exit' => $request->show_on_exit ?? false,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cta_text' => $request->cta_text ?? 'Request a Consultation Now',
            'cta_url' => $request->cta_url,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Lightbox created successfully!',
            'data' => $lightbox
        ], 201);
    }

    /**
     * Display the specified lightbox.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $lightbox = Lightbox::findOrFail($id);
        
        if ($lightbox->image) {
            // Debug the image path
            Log::debug('Image path in database: ' . $lightbox->image);
            
            // Get the filename
            $filename = basename($lightbox->image);
            Log::debug('Image filename: ' . $filename);
            
            // Check storage paths
            $storagePath = storage_path('app/public/lightboxes/' . $filename);
            $publicPath = public_path('storage/lightboxes/' . $filename);
            
            Log::debug('Storage path exists: ' . (file_exists($storagePath) ? 'Yes' : 'No'));
            Log::debug('Public path exists: ' . (file_exists($publicPath) ? 'Yes' : 'No'));
            
            // Add full URL
            $lightbox->full_image_url = asset($lightbox->image);
            Log::debug('Full image URL: ' . $lightbox->full_image_url);
        }
        
        return response()->json(['success' => true, 'data' => $lightbox]);
    }

    /**
     * Update the specified lightbox.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $lightbox = Lightbox::find($id);
        
        if (!$lightbox) {
            return response()->json([
                'success' => false,
                'message' => 'Lightbox not found'
            ], 404);
        }
        
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'header' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'status' => 'required|in:draft,active,inactive',
            'display_pages' => 'nullable|array',
            'close_on_overlay' => 'boolean',
            'show_once' => 'boolean',
            'show_on_exit' => 'boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'cta_text' => 'nullable|string|max:255',
            'cta_url' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle the image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($lightbox->image && Storage::exists(str_replace('storage/', 'public/', $lightbox->image))) {
                Storage::delete(str_replace('storage/', 'public/', $lightbox->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Store in the public disk
            $imagePath = $image->storeAs('lightboxes', $imageName, 'public');
            
            // Set the correct path for the database
            $imagePath = 'storage/' . $imagePath;
            $lightbox->image = $imagePath;
        }

        // Update the lightbox
        $lightbox->update([
            'header' => $request->header,
            'description' => $request->description,
            'status' => $request->status,
            'display_pages' => $request->display_pages,
            'close_on_overlay' => $request->close_on_overlay ?? true,
            'show_once' => $request->show_once ?? false,
            'show_on_exit' => $request->show_on_exit ?? false,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cta_text' => $request->cta_text ?? 'Request a Consultation Now',
            'cta_url' => $request->cta_url,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Lightbox updated successfully!',
            'data' => $lightbox
        ]);
    }

    /**
     * Remove the specified lightbox.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $lightbox = Lightbox::find($id);
        
        if (!$lightbox) {
            return response()->json([
                'success' => false,
                'message' => 'Lightbox not found'
            ], 404);
        }
        
        // Delete the image if it exists
        if ($lightbox->image && Storage::exists(str_replace('storage/', 'public/', $lightbox->image))) {
            Storage::delete(str_replace('storage/', 'public/', $lightbox->image));
        }
        
        $lightbox->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Lightbox deleted successfully!'
        ]);
    }

    /**
     * Get active lightboxes for the current page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActiveLightboxes(Request $request)
    {
        $page = $request->input('page', 'home');
        
        $lightboxes = Lightbox::active()
            ->where(function($query) use ($page) {
                $query->whereJsonContains('display_pages', $page)
                      ->orWhereNull('display_pages')
                      ->orWhere('display_pages', '[]');
            })
            ->get();
        
        return response()->json([
            'success' => true,
            'data' => $lightboxes
        ]);
    }

    /**
     * Record an impression for the lightbox.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function recordImpression($id)
    {
        $lightbox = Lightbox::find($id);
        
        if (!$lightbox) {
            return response()->json([
                'success' => false,
                'message' => 'Lightbox not found'
            ], 404);
        }
        
        $lightbox->recordImpression();
        
        return response()->json([
            'success' => true,
            'message' => 'Impression recorded'
        ]);
    }

    /**
     * Record a click for the lightbox.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function recordClick($id)
    {
        $lightbox = Lightbox::find($id);
        
        if (!$lightbox) {
            return response()->json([
                'success' => false,
                'message' => 'Lightbox not found'
            ], 404);
        }
        
        $lightbox->recordClick();
        
        return response()->json([
            'success' => true,
            'message' => 'Click recorded'
        ]);
    }
}
