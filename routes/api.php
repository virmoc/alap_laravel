<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tevekenysegController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\bejegyzesekController;
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

Route::get('/tevekenyseg', [tevekenysegController::class, 'index']);
/* Route::put('/tevekenyseg/{id}', [tevekenysegController::class, 'update']);
Route::get('/tevekenyseg/{tevekenyseg}', [tevekenysegController::class, 'show']);
Route::delete('/tevekenyseg/{id}', [tevekenysegController::class, 'delete']); */
Route::post('/tevekenyseg', [tevekenysegController::class, 'store']);

Route::get('/users', [usersController::class, 'index']);
/* Route::put('/users/{id}', [usersController::class, 'update']);
Route::get('/users/{users}', [usersController::class, 'show']);
Route::delete('/users/{id}', [usersController::class, 'delete']); */
Route::post('/users', [usersController::class, 'store']);

Route::get('/bejegyzesek', [bejegyzesekController::class, 'index']);
Route::get('/bejegyzesek/{osztaly_id}', [bejegyzesekController::class, 'index']);
/* Route::put('/bejegyzesek/{id}', [bejegyzesekController::class, 'update']);
Route::get('/bejegyzesek/{bejegyzesek}', [bejegyzesekController::class, 'show']);
Route::delete('/bejegyzesek/{id}', [bejegyzesekController::class, 'delete']); */
Route::post('/bejegyzesek', [bejegyzesekController::class, 'store']);