<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SchedulingController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('scheduling')->group(function () {
    Route::post('', [SchedulingController::class, 'create']);
    Route::get('', [SchedulingController::class, 'readAll']);
    Route::get('/{id}', [SchedulingController::class, 'read']);
    Route::get('/per-date/{date}', [SchedulingController::class, 'readAllPerDate']);
    Route::put('/{id}', [SchedulingController::class, 'update']);
    Route::delete('/{id}', [SchedulingController::class, 'delete']);
});

Route::prefix('schedule')->group(function () {
    Route::get('', [ScheduleController::class, 'getSchedulesPerStatus']);
});

Route::prefix('services')->group(function () {
    Route::get('', [ServicesController::class, 'readAll']);
});

Route::prefix('user')->group(function () {
    Route::get('/login', [UserController::class, 'login']);
    Route::get('/sessionDestroy', [UserController::class, 'sessionDestroy']);
});