<?php

use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\LightboxController;
use App\Http\Controllers\MerchantOnboardingController;
use App\Http\Controllers\PartnershipRequestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Consultation Request API routes
Route::post('/consultation-requests', [ConsultationRequestController::class, 'store'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

// Partnership Request API route
Route::post('/partnership-requests', [PartnershipRequestController::class, 'store'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

// Merchant Onboarding API route
Route::match(['post', 'options'], 'merchant-onboarding', [MerchantOnboardingController::class, 'store'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

// Added for compatibility - handle potential trailing spaces in the URL
Route::match(['post', 'options'], 'merchant-onboarding/{any?}', [MerchantOnboardingController::class, 'store'])
    ->where('any', '.*')
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

// Lightbox API routes
Route::prefix('lightboxes')->group(function () {
    Route::get('/', [LightboxController::class, 'index']);
    Route::post('/', [LightboxController::class, 'store']);
    Route::get('/active', [LightboxController::class, 'getActiveLightboxes']);
    Route::get('/debug', [LightboxController::class, 'debugLightboxes']);
    Route::get('/{id}', [LightboxController::class, 'show']);
    Route::put('/{id}', [LightboxController::class, 'update']);
    Route::delete('/{id}', [LightboxController::class, 'destroy']);
    Route::post('/{id}/impression', [LightboxController::class, 'recordImpression']);
    Route::post('/{id}/click', [LightboxController::class, 'recordClick']);
})->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
