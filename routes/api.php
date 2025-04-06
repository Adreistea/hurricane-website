<?php

use App\Http\Controllers\ConsultationRequestController;
use Illuminate\Support\Facades\Route;

// Consultation Request API routes
Route::post('/consultation-requests', [ConsultationRequestController::class, 'store'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
