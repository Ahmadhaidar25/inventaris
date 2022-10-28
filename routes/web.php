<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerBarang;
use App\Http\Controllers\ControllerKriteria;
use App\Http\Controllers\ControllerKomentar;
use App\Http\Controllers\ControllerBantuan;
use App\Http\Controllers\ControllerTentang;
use App\Http\Controllers\ControllerUtama;
use App\Http\Controllers\ControllerAlternatif;
use App\Http\Controllers\ControllerPerhitungan;
use App\Http\Controllers\ControllerHasil;
use App\Http\Controllers\ControllerCetak;

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
Route::get('/', [ControllerUtama::class, 'utama'])->middleware('guest');
Route::get('tentang', [ControllerTentang::class, 'tentang'])->middleware('guest');
Route::get('bantuan', [ControllerBantuan::class, 'bantuan'])->middleware('guest');

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');
Route::post('post-login', [LoginController::class, 'post_login'])->middleware('guest');
Route::get('register', [LoginController::class, 'register'])->middleware('guest');
Route::post('post-register', [LoginController::class, 'post_register'])->middleware('guest');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');

//route user
Route::get('user', [UserController::class, 'index'])->middleware('auth');
Route::get('tambah', [UserController::class, 'create'])->middleware('auth');
Route::post('tambah-user', [UserController::class, 'store'])->middleware('auth');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::post('/update-user/{id}', [UserController::class, 'update'])->middleware('auth');
Route::get('/hapus-user/{id}', [UserController::class, 'delete'])->middleware('auth');
Route::get('profil', [UserController::class, 'profil'])->middleware('auth');
Route::post('/profile/update/', [UserController::class, 'update_profil'])->middleware('auth');
Route::post('/profile/update/', [UserController::class, 'update_profil'])->middleware('auth');
Route::post('/update/image/', [UserController::class, 'update_image'])->middleware('auth');
//route reset password
Route::get('reset-password',[UserController::class, 'reset'])->middleware('auth');
Route::put('password-update',[UserController::class, 'password_update'])->middleware('auth');

//route barang
Route::get('barang', [ControllerBarang::class, 'index'])->middleware('auth');
Route::post('tambah-barang', [ControllerBarang::class, 'store'])->middleware('auth');
Route::get('/hapus-barang/{kode_barang}', [ControllerBarang::class, 'delete'])->middleware('auth');
Route::get('/edit-barang/{kode_barang}', [ControllerBarang::class, 'edit'])->middleware('auth');
Route::post('/update-barang/{kode_barang}', [ControllerBarang::class, 'update'])->middleware('auth');


//route kriteria
Route::get('kriteria', [ControllerKriteria::class, 'index'])->middleware('auth');
Route::post('post-kriteria', [ControllerKriteria::class, 'store'])->middleware('auth');
Route::get('/hapus-kriteria/{id_kriteria}', [ControllerKriteria::class, 'delete'])->middleware('auth');
Route::get('/edit-kriteria/{id_kriteria}', [ControllerKriteria::class, 'edit'])->middleware('auth');
Route::post('/update-kriteria/{id_kriteria}', [ControllerKriteria::class, 'update'])->middleware('auth');


//route alternatif
Route::get('alternatif', [ControllerAlternatif::class, 'index'])->middleware('auth');
Route::post('tambah-alternatif', [ControllerAlternatif::class, 'store'])->middleware('auth');
Route::get('/hapus-alternatif/{kode_alternatif}', [ControllerAlternatif::class, 'delete'])->middleware('auth');
Route::get('/edit-alternatif/{kode_alternatif}', [ControllerAlternatif::class, 'edit'])->middleware('auth');
Route::post('/update-alternatif/{kode_alternatif}', [ControllerAlternatif::class, 'update'])->middleware('auth');

//route perhitungan
Route::get('perhitungan', [ControllerPerhitungan::class, 'index'])->middleware('auth');

//Route hasil akhir

Route::get('hasil-akhir', [ControllerHasil::class, 'hasil_akhir'])->middleware('auth');
//Route::post('typing-event', [MessageController::class, 'typingEvent'])->name('event.typing');

//Rote Cetak Pdf
Route::get('/cetak-pdf/moora', [ControllerCetak::class, 'cetak'])->middleware('auth');
