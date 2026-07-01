<?php

use App\Http\Controllers\PublicPortalController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [PublicPortalController::class, 'index'])->middleware('throttle:60,1');

// Who We Are
Route::get('/overview', [PublicPortalController::class, 'overview']);
Route::get('/council', [PublicPortalController::class, 'council']);
Route::get('/mandate', [PublicPortalController::class, 'mandate']);
Route::get('/service-charter', [PublicPortalController::class, 'serviceCharter']);
Route::get('/strategic-plan', [PublicPortalController::class, 'strategicPlan']);

// Information
Route::get('/tenders', [PublicPortalController::class, 'tenders']);
Route::get('/gallery', [PublicPortalController::class, 'gallery']);
Route::get('/careers', [PublicPortalController::class, 'careers']);

// Our Programmes
Route::get('/school-meals', [PublicPortalController::class, 'schoolMeals']);
Route::get('/duksi-madrassa', [PublicPortalController::class, 'duksiMadrassa']);
Route::get('/apbet', [PublicPortalController::class, 'apbet']);

// Utility Pages
Route::get('/downloads', [PublicPortalController::class, 'downloads']);
Route::get('/contact', [PublicPortalController::class, 'contact']);
Route::get('/news', [PublicPortalController::class, 'news']);
Route::get('/faqs', [PublicPortalController::class, 'faqs']);