<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ReportesController;

//metodo para entrar a todos los controladores
Route::resource('/', InicioController::class);
Route::get('listaCanales', [InicioController::class, 'canales'])->name('vistaCanalaes');
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
Route::get('preguntas_frecuentes', [InicioController::class, 'preguntas'])->name('preguntas');
Route::get('avisos_legales', [InicioController::class, 'avisos'])->name('legales');
Route::post('Repotes',[ReportesController::class,'store'])->name('Reportes.store');

