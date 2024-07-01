<?php
use App\Http\Controllers\PrimaryController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

// Rute untuk PrimaryController
Route::get('/register', [PrimaryController::class, 'getRegister']);
Route::get('/', [PrimaryController::class, 'getLogin'])->name('login');
Route::post('/postregister', [PrimaryController::class, 'postRegister']);
Route::post('/postlogin', [PrimaryController::class, 'postLogin']);
Route::post('/logout', [PrimaryController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PrimaryController::class, 'getDashboard']);
Route::get('/adduser', [PrimaryController::class, 'getAddUser']);
Route::delete('/deleteuser/{id_user}', [PrimaryController::class, 'deleteUser'])->middleware('auth');


// Rute untuk MenuController
Route::get('/sidebar', [MenuController::class, 'getMenu']);
Route::get('/tracking', [MenuController::class, 'tracking']);
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/deletemenu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
