<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LandingDataProviderController;
use App\Http\Controllers\API\ReservasDataProviderController;
use App\Http\Controllers\API\ReservationsDataProviderController;
use App\Http\Controllers\API\ReservationAPIController;
use App\Http\Controllers\API\VehicleAvailableRateController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/landing', LandingDataProviderController::class)->name('dataprovider.landing');

Route::post('/reservas', ReservasDataProviderController::class)->name('dataprovider.reservas');

Route::post('/reservations', ReservationsDataProviderController::class)->name('dataprovider.reservations');

Route::post('/disponibilidad', VehicleAvailableRateController::class)->name('dataprovider.disponibilidad');

Route::post('/reserve', ReservationAPIController::class)->name('reserve.store');
