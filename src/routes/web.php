<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', function () {
    return view('pages.login');
});

Route::get('/esqueceu-senha', function () {
    return view('pages.forgot-password');
});

Route::get('/agendamentos', function () {
    return view('pages.schedules');
});
