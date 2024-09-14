<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobListingController::class, 'index']);
