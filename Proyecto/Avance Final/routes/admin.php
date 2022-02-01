<?php

use App\Http\Controllers\Admin\CaracteristicasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\JefeController;
use App\Http\Controllers\Admin\NucleoController;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\SensoController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\SituacionController;
use App\Http\Controllers\Admin\ViviendaController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('Viviendas', ViviendaController::class)->names('admin.viviendas');

Route::resource('Personas', PersonaController::class)->names('admin.personas');

Route::resource('Censos', SensoController::class)->names('admin.censos');

Route::resource('Jefes', JefeController::class)->names('admin.jefes');

Route::resource('Nucleos', NucleoController::class)->names('admin.nucleos');

Route::resource('Caracteristicas', CaracteristicasController::class)->names('admin.caracteristicas');

Route::resource('Situaciones', SituacionController::class)->names('admin.situaciones');

Route::resource('Servicios', ServicioController::class)->names('admin.servicios');

Route::get('Eleccion', function () {
    return view('admin.censos.eleccion');
})->name('admin.censos.eleccion');
