<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

//home
Route::get('/', fn() => redirect()->route('index'));

Route::get('/', [PatientController::class, 'index'])->name('index');
Route::get('/create', [PatientController::class, 'create'])->name('create');
Route::post('/', [PatientController::class, 'store'])->name('store');
Route::get('/{id}', [PatientController::class, 'show'])->name('show');

