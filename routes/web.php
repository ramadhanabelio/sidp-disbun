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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::resource('kabupaten', KabupatenController::class);
    Route::get('kabupaten/{kabupaten}/kecamatan/create', [KecamatanController::class, 'create'])->name('kecamatan.create');
    Route::post('kabupaten/{kabupaten}/kecamatan', [KecamatanController::class, 'store'])->name('kecamatan.store');
    Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan.index');
    Route::get('kecamatan/{kecamatan}/desa/create', [DesaController::class, 'create'])->name('desa.create');
    Route::post('kecamatan/{kecamatan}/desa', [DesaController::class, 'store'])->name('desa.store');
    Route::get('/desa', [DesaController::class, 'index'])->name('desa.index');
});
