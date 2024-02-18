<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Bagian Login
Route::get('/', [LoginController::class, 'index']);

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dasjur', [DashboardController::class, 'indjur']);

// Bagian Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahtam', [MahasiswaController::class, 'tambah']);

Route::get('/mahedi', [MahasiswaController::class, 'edit']);

// Bagian Jurusan
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurdat', [JurusanController::class, 'indjurdat']);

Route::get('/jurtam', [JurusanController::class, 'tambah']);

Route::get('/juredi', [JurusanController::class, 'edit']);

// Bagian Fakultas
Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/fakdat', [FakultasController::class, 'indfakdat']);

Route::get('/faktam', [FakultasController::class, 'tambah']);

Route::get('/fakedi', [FakultasController::class, 'edit']);
