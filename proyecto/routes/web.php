<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\PersonasController;

Route::get('/', [ImagenesController::class, 'getContent']);
Route::get('/dos', [AgendaController::class, 'getInsertar'])->name('agenda.insertar');
Route::post('/dos', [AgendaController::class, 'postInsertar']);
Route::get('/tres', [AgendaController::class, 'getVisualizar']);
Route::post('/tres', [AgendaController::class, 'postVisualizar']);
