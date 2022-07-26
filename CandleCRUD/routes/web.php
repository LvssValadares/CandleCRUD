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
Route::get('/candles/edit', [CandleController::class, 'edit']);
Route::get('/candles/list', [CandleController::class, 'list']);
Route::post('/candles', [CandleController::class, 'store']);
Route::get('/candles/{id}', [CandleController::class, 'show']);
Route::delete('/candles/{id}', [CandleController::class, 'destroy']);



