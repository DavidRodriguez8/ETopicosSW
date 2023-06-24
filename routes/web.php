<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Reportes;

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
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/editar/{id}', [Facultades::class, 'form_edita'])->name('editaFac');
Route::post('/facultades/editar/{id}', [Facultades::class, 'actualizar'])->name('actualizar_Fac');


Route::get('/regnotas/listado', [Calificaciones::class, 'index']);

Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');
Route::get('/estudiantes/registrar', [Estudiantes::class, 'formulario_reg']);
Route::post('/estudiantes/registrar', [Estudiantes::class, 'registrare']);
Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminare'])->name('eliminaEst');

Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoTea');
Route::get('/profesores/registrar', [Profesores::class, 'reg_formulario']);
Route::post('/profesores/registrar', [Profesores::class, 'registrart']);
Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminart'])->name('eliminaTea');

Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoPro');
Route::get('/programas/registrar', [Programas::class, 'registro_form']);
Route::post('/programas/registrar', [Programas::class, 'registrarp']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminarp'])->name('eliminaPro');

Route::get('/reportes/listado', [Reportes::class, 'index']);






