<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TipsController;

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

Route::controller(GalleryController::class)->group(function ($route) {
    Route::get('/Galeria', 'index');
});

Route::controller(EventsController::class)->group(function ($route) {
    Route::get('/Eventos', 'index');
});

Route::controller(ContactController::class)->group(function ($route) {
    Route::get('/Contactanos', 'index');
});

Route::controller(TipsController::class)->group(function ($route) {
    Route::get('/Recomendaciones', 'index');
});
