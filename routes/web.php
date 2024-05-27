<?php

use App\Http\Controllers\DatoController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\IdentificacionController;
use App\Http\Controllers\MarcoController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/registro-id', [IdentificacionController::class, 'store'])->name('formulario.store');
    Route::get('/identificacion/{id}', [IdentificacionController::class, 'cargar'])->name('formulario.identificaciones');
    Route::post('/registro-marco-id', [MarcoController::class, 'store'])->name('formulario.crear');
    Route::get('/marco-normativo/{id}', [MarcoController::class, 'cargar'])->name('formulario.marco');
    Route::get('/usuario/{id}', [UsuarioController::class, 'cargar'])->name('formulario.usuario');
    Route::get('/soporte/{id}', [SoporteController::class, 'cargar'])->name('formulario.soporte');
    Route::get('/digital/{id}', [DigitalController::class, 'cargar'])->name('formulario.digital');
    Route::get('/listado', [ProcedimientoController::class, 'index'])->name('procedimiento.listado');

    Route::get('/dashboard', [ProcedimientoController::class, 'dashboard'])->name('dashboard');

    Route::get('/notificaciones/{id}', [NotificacionController::class, 'cargar'])->name('formulario.notifiaciones');
    Route::get('/datos/{id}', [DatoController::class, 'cargar'])->name('formulario.datos');
    Route::post('/registro-usuarios-id', [UsuarioController::class, 'store'])->name('formulario.usuario');
    Route::post('/registro-soporte-id', [SoporteController::class, 'store'])->name('formulario.soporte');
    Route::post('/registro-digital-id', [DigitalController::class, 'store'])->name('formulario.digital');
    Route::post('/registro-procedimiento', [ProcedimientoController::class, 'store'])->name('crear.procedimiento');
    Route::post('/registro-notifiacion-id', [NotificacionController::class, 'store'])->name('formulario.notificacion');
    Route::post('/registro-datos-id', [DatoController::class, 'store'])->name('formulario.datos');
});

require __DIR__ . '/auth.php';
