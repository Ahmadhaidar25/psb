<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ControllerKriteria;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerAlternatif;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerTentang;
use App\Http\Controllers\ControllerBantuan;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('post-login', [LoginController::class, 'login_post'])->middleware('guest');

Route::post('post-register', [LoginController::class, 'store'])->middleware('guest');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');



Route::get('user', [UserController::class, 'index'])->middleware('auth');
Route::post('simpan-user', [UserController::class, 'store'])->middleware('auth');
Route::get('/hapus/user/{id}', [UserController::class, 'show'])->middleware('auth');
Route::post('/ubah/user/{id}', [UserController::class, 'update'])->middleware('auth');

//Route Ubah password
Route::get('ubah-password', [UserController::class, 'ubah_password'])->middleware('auth');
Route::put('update-password',[UserController::class, 'update_password'])->middleware('auth');

//route kriteria
Route::get('kriteria', [ControllerKriteria::class, 'kriteria'])->middleware('auth');
Route::post('simpan-kriteria', [Controllerkriteria::class, 'tambah_kriteria'])->middleware('auth');
Route::get('/hapus/kriteria/{kode_kriteria}', [ControllerKriteria::class, 'hapus_kriteria'])->middleware('auth');
Route::post('/ubah/kriteria/{kode_kriteria}', [ControllerKriteria::class, 'update_kriteria'])->middleware('auth');

//route alternatif
Route::get('alternatif', [ControllerAlternatif::class, 'alternatif'])->middleware('auth');
Route::post('tambah_alternatif', [ControllerAlternatif::class, 'tambah_alternatif'])->middleware('auth');
Route::get('/hapus-alternatif/{kode_alternatif}', [ControllerAlternatif::class, 'hapus_alternatif'])->middleware('auth');


//Route Siswa
Route::get('kelola-data-kelas', [ControllerSiswa::class, 'kelola_data_kelas'])->middleware('auth');
Route::post('post-siswa', [ControllerSiswa::class, 'post_siswa'])->middleware('auth');
Route::post('/update-siswa/{id_siswa}', [ControllerSiswa::class, 'update_siswa'])->middleware('auth');
Route::get('/hapus-siswa/{id}', [ControllerSiswa::class, 'hapus_siswa'])->middleware('auth');


//Route Tentang
Route::get('tentang', [ControllerTentang::class, 'tentang'])->middleware('guest');

//Route Bantuan
Route::get('bantuan', [ControllerBantuan::class, 'bantuan'])->middleware('guest');


//Route Perhitungan
Route::get('perhitungan', [ControllerPerhitungan::class, 'perhitungan'])->middleware('auth');

//Route Hasil Akhir
Route::get('hasil-akhir', [ControllerHasil::class, 'hasil_akhir'])->middleware('auth');



//Route Cetak PDF moora
Route::get('/cetak-pdf/moora', [ControllerCetak::class, 'pdf_moora'])->middleware('auth');



//Route Cetak Excel moora
Route::get('excel-moora', [ControllerCetak::class, 'excel_moora'])->middleware('auth');

//Route Cetak PDF smart
Route::get('/cetak-pdf/smart', [ControllerCetak::class, 'pdf_smart'])->middleware('auth');

//Route Cetak Excel smart
Route::get('/cetak-excel/smart', [ControllerCetak::class, 'excel_smart'])->middleware('auth');