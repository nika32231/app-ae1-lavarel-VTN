<?php

use Illuminate\Support\Facades\Route;

// Ruta 1
//Debe mostrar:
//Bienvenido a mi primera aplicación Laravel
Route::get('/', function () {
    return 'Bienvenido a mi primera aplicación Laravel';
});

// Ruta 2
//Debe mostrar:
//Aplicación realizada por: TU NOMBRE
//Curso: Introduccion a Laravel
Route::get('/info', function () {
    return 'Aplicacion realizada por: Veronica<br>Curso: Introduccion a Laravel';
});

// Ruta 3
///saludo/{nombre}
//Debe mostrar un saludo utilizando el nombre recibido.
Route::get('/saludo/{nombre}', function ($nombre) {
    return "Hola, $nombre. Bienvenida a Laravel.";
});