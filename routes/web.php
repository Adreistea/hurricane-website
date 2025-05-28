<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Special route for partnership forms with types
Route::get('/partnership-forms/{type?}', function () {
    return view('welcome');
});

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

// Debug route for lightbox troubleshooting (remove this in production)
Route::get('/debug-lightbox', function () {
    $allLightboxes = \App\Models\Lightbox::all();
    $activeLightboxes = \App\Models\Lightbox::active()->get();
    
    // Filter by page on the PHP side to avoid JSON query issues
    $filteredLightboxes = $activeLightboxes->filter(function($lightbox) {
        $page = 'home';
        // Handle null or empty display_pages
        if (empty($lightbox->display_pages)) {
            return true; // Show on all pages if no specific pages set
        }
        
        // Ensure display_pages is an array
        $displayPages = is_array($lightbox->display_pages) 
            ? $lightbox->display_pages 
            : json_decode($lightbox->display_pages, true) ?? [];
        
        // Check if the current page is in the display_pages array
        return in_array($page, $displayPages);
    });
    
    return view('debug-lightbox', compact('allLightboxes', 'activeLightboxes', 'filteredLightboxes'));
});
