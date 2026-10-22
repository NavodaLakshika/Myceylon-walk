<?php

use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - My Ceylon Walk
|--------------------------------------------------------------------------
|
| Handcrafted travel and tour booking frontend routes for Sri Lanka.
|
*/

Route::get('/', [TravelController::class, 'index'])->name('home');
Route::get('/tours', [TravelController::class, 'tours'])->name('tours');
Route::get('/stays', [TravelController::class, 'stays'])->name('stays');
Route::get('/experiences', [TravelController::class, 'experiences'])->name('experiences');
Route::get('/about', [TravelController::class, 'about'])->name('about');

// Custom trip booking submission
Route::post('/plan-trip', [TravelController::class, 'planTrip'])->name('plan.trip');
