<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'show']);

Route::get('/ads', [\App\Http\Controllers\AdsController::class, 'index']);
Route::get('/ads/{id}', [\App\Http\Controllers\AdsController::class, 'show']);

Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/service/{id}', [\App\Http\Controllers\ServiceController::class, 'show']);

Route::get('/happen', [\App\Http\Controllers\HappenController::class, 'index']);
Route::get('/happen/{id}', [\App\Http\Controllers\HappenController::class, 'show']);
