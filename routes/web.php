<?php

use App\Http\Controllers\PublicPortalController;
use Illuminate\Support\Facades\Route;

// Map the homepage to our public portal controller
Route::get('/', [PublicPortalController::class, 'index']);