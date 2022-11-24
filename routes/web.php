<?php

use App\Exports\SiswaExport;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrintpdfController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LainnyaController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\BeritaAcaraController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// login siswa
Route::get('/', [AuthController::class, 'loginUi'])->name('login');
Route::post('/masuk', [AuthController::class, 'loginAuth']);
Route::get('/ujian', [AuthController::class, 'absenUi']);
Route::put('/ujian/{id}', [AuthController::class, 'absen']);


// login admin
Route::get('/admin', [AuthController::class, 'loginAdmin']);
Route::post('/join', [AuthController::class, 'loginAuth2']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::middleware(['auth:web'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::get('/siswaexport', [SiswaController::class, 'export']);
    Route::post('/siswaimport', [SiswaController::class, 'ImportSiswaExcel']);
    Route::post('/jurusanimport', [jurusanController::class, 'ImportJurusanExcel']);

    Route::resource('/jurusan', JurusanController::class);

    Route::resource('/printpdf', PrintpdfController::class);
    Route::get('/exportAbsen', [PrintpdfController::class, 'export']);

    Route::resource('/absen', AbsenController::class);

    // Route::get('/print', [PrintpdfController::class, 'print']);
    // berita acara
    Route::get('/printBeritaAcara', [BeritaAcaraController::class, 'beritaAcara']);
    Route::post('/print', [BeritaAcaraController::class, 'printBerita']);

    Route::get('/printSiswaUi', [PrintpdfController::class, 'printSiswaUi']);
    Route::put('/printSiswa/{id}', [PrintpdfController::class, 'printSiswa']);
    Route::post('/printSiswa', [PrintpdfController::class, 'filter']);

    Route::resource('/lainnya', LainnyaController::class);
    Route::resource('/ruangan', RuanganController::class);

    Route::resource('/guru', GuruController::class);
    Route::resource('/karyawan', KaryawanController::class);
});
