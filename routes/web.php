<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karyawan\KaryawanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LemburController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('Home.dashboard');
});

Route::resource('karyawan', KaryawanController::class);
Route::get('tambahkry', [KaryawanController::class,'create'])->name('tambahkry');
Route::get('/update/{id}', [KaryawanController::class,'update'])->name('update');
Route::get('/editkry/{id}', [KaryawanController::class,'edit'])->name('editkry');
Route::get('/delete/{id}', [KaryawanController::class,'destroy'])->name('delete');

Route::get('jabatan', [JabatanController::class,'index'])->name('jabatan');
Route::get('/tambahjabatan', [JabatanController::class,'create'])->name('tambahjabatan');

Route::resource('absensi', AbsensiController::class);
Route::get('/tambahabs', [AbsensiController::class,'create'])->name('tambahabs');

Route::resource('lembur', LemburController::class);
Route::get('lembur', [LemburController::class,'index'])->name('lembur');
Route::get('/tambahlmbr', [LemburController::class,'tambah'])->name('tambahlmbr');
Route::post('/buatlembur', [LemburController::class,'create'])->name('buatlembur');
Route::PUT('/store', [LemburController::class,'store'])->name('store');
Route::DELETE('/delete/{id}', [LemburController::class,'destroy'])->name('delete');
