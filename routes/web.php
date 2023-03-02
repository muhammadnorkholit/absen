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
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\WaktuController;
use Illuminate\Routing\RouteGroup;


// login siswa
Route::get('/', [AuthController::class, 'loginUi'])->name('login');
Route::post('/masuk', [AuthController::class, 'loginAuth']);
Route::get('/ujian', [AuthController::class, 'absenUi']);
Route::post('/ujian/{id}', [AuthController::class, 'absen']);


// login admin
Route::get('/admin', [AuthController::class, 'loginAdmin']);
Route::post('/join', [AuthController::class, 'loginAuth2']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::middleware(['auth:web'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::get('/siswa', [SiswaController::class, 'siswaUi']);
    Route::resource('/siswaSemua', SiswaController::class);
    Route::get('/printBeritaAcara', [BeritaAcaraController::class, 'beritaAcara']);
    Route::post('/print', [BeritaAcaraController::class, 'printBerita']);
    Route::post('/exportAbsen', [PrintpdfController::class, 'export']);
    Route::post('/printSiswa/{id}', [PrintpdfController::class, 'printSiswa']);
    Route::get('/printSiswa', [SiswaController::class, 'filter']);
    Route::post('/siswaimport', [SiswaController::class, 'ImportSiswaExcel']);
    
    // Route::post('/printSiswa/hadirkansemua',  [SiswaController::class, 'hadirsemua']);

    Route::resource('/jurusan', JurusanController::class);

    Route::resource('/absen', AbsenController::class);

    Route::resource('/lainnya', LainnyaController::class);
    Route::resource('/ruangan', RuanganController::class);
    Route::resource('/mapel', MapelController::class);
    Route::resource('/waktu', WaktuController::class);

    Route::resource('/guru', GuruController::class);
    Route::resource('/karyawan', KaryawanController::class);
});

// Route::middleware(['roles:teknisi','auth:web'])->group(function () {
  
// });