<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AboutController;

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


Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    // Tus rutas aquí
});

Route::controller(InicioController::class)->group(function ($route) {
    Route::get('/', 'index');
});

Route::controller(AboutController::class)->group(function ($route) {
    Route::get('/Nosotros', 'index');
});
