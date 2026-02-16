<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProyectoController;


Route::get('/', function () {
    return Inertia::render('Welcome');
});

// Rutas protegidas (requiere login)
Route::middleware(['auth'])->group(function () {

    // Dashboard (de Breeze)
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // CRUD Usuarios
    Route::resource('usuarios', UserController::class);

    // CRUD Proyectos
    Route::resource('proyectos', ProyectoController::class);


});

require __DIR__.'/auth.php';
