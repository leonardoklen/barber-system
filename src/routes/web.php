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
    return view('pages.website.home.index');
});

Route::get('/entrar', function () {
    return view('pages.administrative-area.login.index');
});

Route::get('/esqueceu-senha', function () {
    return view('pages.administrative-area.forgot-password.index');
});

Route::get('/inicio', function () {
    return view('pages.administrative-area.home.index');
});
