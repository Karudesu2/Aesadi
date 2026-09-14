<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| Vehicle Rental System Routes
|--------------------------------------------------------------------------
*/

// Show the vehicle rental form
Route::get('/', [VehicleController::class, 'index'])
    ->name('vehicle.index');

// Calculate rental price
Route::post('/calculate', [VehicleController::class, 'calculate'])
    ->name('vehicle.calculate');