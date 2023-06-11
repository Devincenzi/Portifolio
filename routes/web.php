<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\ShieldsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/welcome', [HomeController::class, 'welcome']);

Route::get('/jogos', [JogosController::class, 'index'])->name('jogos');

Route::get('/jogos/cobra', [JogosController::class, 'cobra']);
Route::get('/jogos/tap-ganso', [JogosController::class, 'ganso']);

Route::get('/projetos/portifolio', [HomeController::class, 'portifolio']);
Route::get('/projetos/cobra', [HomeController::class, 'cobra']);

require __DIR__.'/auth.php';
