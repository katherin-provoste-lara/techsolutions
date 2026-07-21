<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyectos/{proyecto}/eliminar', [ProyectoController::class, 'confirmarEliminar'])
    ->name('proyectos.confirmarEliminar');

# Resource route permite crear todas las rutas necesarias para un CRUD de manera automática.
Route::resource('proyectos', ProyectoController::class);
