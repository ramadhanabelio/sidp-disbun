<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\AkunDesaController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\PendukungController;
use App\Http\Controllers\RekapDataController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PemilikKebunController;

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
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');

    // Kabupaten Routes
    Route::resource('kabupaten', KabupatenController::class);

    // Kecamatan Routes
    Route::resource('kecamatan', KecamatanController::class);

    // Desa Routes
    Route::resource('desa', DesaController::class);
    Route::post('kecamatan/{kecamatan}/desa', [DesaController::class, 'store'])->name('desa.store');
    Route::post('desa/{desa}/create-user', [DesaController::class, 'createUserAccount'])->name('desa.create-user');

    // Akun Desa Routes
    Route::get('/akun-desa', [AkunDesaController::class, 'index'])->name('akun-desa.index');

    // Rekap Data Routes
    Route::get('/rekap-data', [RekapDataController::class, 'index'])->name('rekap-data');
    Route::get('rekap-data/cetak/{id}', [RekapDataController::class, 'cetakPdf'])->name('rekap-data.cetak');
});

// Pendataan Routes
Route::get('/pendataan', [PendataanController::class, 'index'])->name('pendataan.index');
Route::post('/pendataan/store', [PendataanController::class, 'store'])->name('pendataan.store');
Route::post('/pendataan/storeKebun', [PendataanController::class, 'storeKebun'])->name('pendataan.storeKebun');
Route::post('/pendataan/storePendukung', [PendataanController::class, 'storePendukung'])->name('pendataan.storePendukung');

Route::prefix('pemilik_kebun')->name('pemilik_kebun.')->group(function () {
    Route::get('/', [PemilikKebunController::class, 'index'])->name('index');
    Route::get('/create', [PemilikKebunController::class, 'create'])->name('create');
    Route::post('/store', [PemilikKebunController::class, 'store'])->name('store');
    Route::get('/{id}', [PemilikKebunController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PemilikKebunController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PemilikKebunController::class, 'update'])->name('update');
    Route::delete('/{id}', [PemilikKebunController::class, 'destroy'])->name('destroy');
});

Route::get('/pendataan', [PemilikKebunController::class, 'index'])->name('pendataan.index');

Route::get('/kecamatan/{kabupatenId}', [PemilikKebunController::class, 'getKecamatan']);
Route::get('/desa/{kecamatanId}', [PemilikKebunController::class, 'getDesa']);
Route::get('/get-desas', [PendataanController::class, 'getDesas']);

Route::post('/pemilik_kebun', [PemilikKebunController::class, 'store'])->name('pemilik_kebun.store');
Route::post('/kebun/store', [KebunController::class, 'store'])->name('kebun.store');
Route::post('/pendukung/store', [PendukungController::class, 'store'])->name('pendukung.store');
