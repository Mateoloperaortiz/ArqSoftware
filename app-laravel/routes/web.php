<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'inicio'])->name('clients.inicio');
Route::get('/clientes/crear', [ClientController::class, 'crear'])->name('clients.crear');
Route::post('/clientes', [ClientController::class, 'guardar'])->name('clients.guardar');
Route::get('/clientes', [ClientController::class, 'listar'])->name('clients.listar');
Route::get('/clientes/{id}', [ClientController::class, 'ver'])->name('clients.ver');
Route::delete('/clientes/{id}', [ClientController::class, 'borrar'])->name('clients.borrar');
