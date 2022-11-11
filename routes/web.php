<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrintpdfController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PrintController;

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
Route::get('/', [AuthController::class, 'loginUi']);
Route::post('/masuk', [AuthController::class, 'loginAuth']);


// // login admin
// Route::get('/', [AuthController::class, 'loginAdmin']);
// Route::post('/masuk', [AuthController::class, 'loginAuth3']);
// Route::get('/logout', [AuthController::class, 'logout']);


// Route::middleware(['auth',])->group(function () {
//     Route::resource('/dashboard', DashboardController::class);
//     Route::resource('/siswa', SiswaController::class);
//     Route::post('/siswaimport', [SiswaController::class, 'ImportSiswaExcel']);
//     Route::resource('/jurusan', JurusanController::class);
//     Route::resource('/printpdf', PrintpdfController::class);
//     Route::resource('/landing', LandingController::class);
//     Route::resource('/absen', AbsenController::class);
// });

Route::resource('/dashboard', DashboardController::class);
Route::resource('/siswa', SiswaController::class);
Route::post('/siswa/import', [SiswaController::class, 'ImportSiswaExcel']);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/printpdf', PrintpdfController::class);
Route::resource('/landing', LandingController::class);
Route::resource('/absen', AbsenController::class);

// Route::get('/print', [PrintController::class, 'print']);
