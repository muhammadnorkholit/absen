<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\PrintpdfController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
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

// // login siswa
// Route::get('/', [AuthController::class, 'loginUi']);
// Route::post('/masuk', [AuthController::class, 'loginAuth']);
// Route::get('/logout', [AuthController::class, 'logout']);

// // login guru
// Route::get('/', [AuthController::class, 'loginGuru']);
// Route::post('/masuk', [AuthController::class, 'loginAuth2']);
// Route::get('/logout', [AuthController::class, 'logout']);

// // login admin
// Route::get('/', [AuthController::class, 'loginAdmin']);
// Route::post('/masuk', [AuthController::class, 'loginAuth3']);
// Route::get('/logout', [AuthController::class, 'logout']);




Route::resource('/dashboard', DashboardController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/siswa', SiswaController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/printpdf', PrintpdfController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/landing', LandingController::class);
