<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobListingController::class, 'index']);

Route::get('/sign-up', [AuthController::class, 'showSignupForm']);