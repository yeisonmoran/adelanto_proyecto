<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('servicios', 'App\Http\Controllers\ServiciosController');
