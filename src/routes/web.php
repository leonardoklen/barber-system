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

Route::get('/agendar', function () {
    return view('pages.website.agendar.index');
});

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('pages.admin.login.index');
    });

    Route::get('/esqueceu-senha', function () {
        return view('pages.admin.forgot-password.index');
    });

    Route::get('/agendamentos', function () {
        return view('pages.admin.scheduling.index');
    });
});
