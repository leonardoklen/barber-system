<?php

use App\Http\Controllers\SchedulingController;
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

Route::post('/scheduling', [SchedulingController::class, 'create']);
Route::get('/scheduling', [SchedulingController::class, 'readAll']);
Route::get('/scheduling/{id}', [SchedulingController::class, 'read']);
Route::put('/scheduling/{id}', [SchedulingController::class, 'update']);
Route::delete('/scheduling/{id}', [SchedulingController::class, 'delete']);