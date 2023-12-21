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

Route::get('/', function () {
    return view('plantilla');
});

//Route::get('grados/pdf',[App\Http\Controllers\GradosController::class, 'pdf'])->name('grado.pdf');
Route::resource('grados', App\Http\Controllers\GradosController::class);
Route::resource('alumnos', App\Http\Controllers\AlumnosController::class);
Route::resource('materias', App\Http\Controllers\MateriasController::class);
Route::resource('notas', App\Http\Controllers\NotasController::class);
