<?php

use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio',
[ContactosController::class,'mostrar'])->name('inicio');

Route::get('/inicio/agregar/directorio',
[ContactosController::class,'agregarDirectorio'])->name('agregar.directorio');

Route::post('/inicio/agregar/directorio/salvar',
[ContactosController::class,'agregarDirectorioSalvar'])->name('agregar.directorio.salvar');

Route::get('inicio/buscar/directorio', 
[ContactosController::class,'buscar'])->name('buscar.directorio');

Route::get('/inicio/buscar/directorio/{email}',[ContactosController::class,'buscarDirectorio'])->name('busqueda.comppleta');