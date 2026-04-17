<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-mi', function () { return view('sobre-mi'); });
Route::get('/catalogo', function () { return view('catalogo'); });
Route::get('/consultas', function () { return view('consultas'); });
Route::get('/contacto', function () { return view('contacto'); });
Route::get('/terminos-y-condiciones', function () { return view('terminos-y-condiciones'); });
Route::get('/quienes-somos', function () { return view('quienes-somos'); });
Route::get('/comercializacion', function () { return view('comercializacion'); });
