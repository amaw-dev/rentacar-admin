<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationEmailPreviewController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', fn () => redirect('/reservations'));
Route::get('/dashboard', fn () => redirect('/reservations'))->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/reservations/cleanFilters', [ReservationController::class,'cleanFilters'])->name('reservations.cleanFilters');
    Route::get('/reservations/preview/{reservation}', ReservationEmailPreviewController::class)->name('reservations.emailPreview');
    Route::resource('/reservations', ReservationController::class);
    // Route::prefix('/reservations')->group( function() {

    // });

    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');
});
