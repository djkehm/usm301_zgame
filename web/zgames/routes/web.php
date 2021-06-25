<?php

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

//Route::view(Ruta, Nombre de vista sin blade)->name(NombreDeRutaQueSeUsa)
Route::view("/","home")->name("home");
Route::view("/ver_consola", "ver_consolas")->name("ver_consolas");
Route::view("/ver_juegos", "ver_juegos")->name("ver_juegos");
Route::view("/agregar_juego", "agregar_juego")->name("agregar_juego");