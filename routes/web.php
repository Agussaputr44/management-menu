<?php
use App\Http\Controllers\PrimaryController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [PrimaryController::class, 'getRegister']);
Route::get('/', [PrimaryController::class, 'getLogin'])->name('login');
Route::post('/postregister', [PrimaryController::class, 'postRegister']);
Route::post('/postlogin', [PrimaryController::class, 'postLogin']);
Route::get('/dashboard', [PrimaryController::class, 'getDashboard']);
Route::get('/adduser', [PrimaryController::class, 'getAddUser']);
