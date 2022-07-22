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

Route::get('/candleRegister', function () {
    return view('candleRegister');
});

Route::get('/candles', function () {
    return view('candles');
});

Route::get('/candleDelete', function () {
    return view('candleDelete');
});
