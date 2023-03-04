<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//No supe cuál de las dos maneras funcionaría, así que intenté de las 2 maneras

Route::get('/productos', function () {
    return view('Productos.index');
});

Route::get('/editar', function () {
    return view('Productos.edit');
});

Route::get('/crear', function () {
    return view('Productos.create');
});

Route::get('/productos/edit',[ProductoController::class,'edit']);
Route::get('/productos/create',[ProductoController::class,'create']);
Route::get('/productos',[ProductoController::class,'index']);