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
use App\Http\Controllers\CandleController;

Route::get('/', [CandleController::class, 'index']);
Route::get('/candles/create', [CandleController::class, 'create']);
Route::get('/candles/delete', [CandleController::class, 'delete']);
Route::get('/candles/list', [CandleController::class, 'list']);

Route::get('/candles', function () {
    return view('candles');
});

Route::get('/candles/{id}', function ($id) {
    return view('candle', ['id' => $id]);
});

Route::get('/candleDelete', function () {
    return view('candleDelete');
});
