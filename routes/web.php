<?php

use App\Http\Controllers\PrimaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrimaryController::class, 'getLogin']);
Route::get('/dashboard', [PrimaryController::class, 'getDashboard'])->middleware('web'); // Menambahkan middleware 'web' di sini
Route::get('/register', [PrimaryController::class, 'getRegister']);
Route::post('/postregister', [PrimaryController::class, 'postRegister']);
Route::post('/postlogin', [PrimaryController::class, 'postLogin']);
