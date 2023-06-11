<?php

use App\Http\Controllers\UserController;
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

Route::post('users/delete/{id}', [UserController::class, 'delete']);
Route::post('users/alter/{id}', [UserController::class, 'alter']);
Route::post('users/resetPassword/{id}', [UserController::class, 'resetPassword']);
Route::get('users/deleteall', [UserController::class, 'deleteall']);

Route::get('products', [\App\Http\Controllers\Api\ProductController::class, 'index']);
