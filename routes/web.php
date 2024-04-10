<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('aerolineas', 'App\Http\Controllers\AerolineasController');
Route::resource('paquetes', 'App\Http\Controllers\PaquetesController');
Route::resource('reservas', 'App\Http\Controllers\ReservasController');
Route::resource('Vuelos', 'App\Http\Controllers\VuelosController');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
