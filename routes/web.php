<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas serán
| asignadas al grupo de middleware "web". ¡Haz algo grandioso!
|
*/

// LANDING PAGE //
Route::get('/', [IndexController::class, 'index'])->name('index');  // Muestra la vista de inicio
Route::get('/index', [IndexController::class, 'index'])->name('index');  // Muestra la vista de inicio