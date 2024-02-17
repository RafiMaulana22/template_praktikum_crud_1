<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bagian Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahtam', [MahasiswaController::class, 'tambah']);

Route::get('/mahedi', [MahasiswaController::class, 'edit']);

// Bagian Jurusan
Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/jurtam', [JurusanController::class, 'tambah']);

Route::get('/juredi', [JurusanController::class, 'edit']);
