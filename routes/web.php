<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth Routes
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // Kabupaten Routes
    Route::resource('kabupaten', KabupatenController::class);

    // Kecamatan Routes
    Route::resource('kecamatan', KecamatanController::class);

    // Desa Routes
    Route::resource('desa', DesaController::class);
    Route::post('kecamatan/{kecamatan}/desa', [DesaController::class, 'store'])->name('desa.store');
});
