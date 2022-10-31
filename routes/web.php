<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karyawan\KaryawanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\CutiController;

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
Route::get('jabatan', [JabatanController::class,'index'])->name('jabatan');
Route::get('tambahkry', [KaryawanController::class,'create'])->name('tambahkry');
Route::post('/updatekry/{id}', [KaryawanController::class,'update'])->name('updatekry');
Route::get('/editkry/{id}', [KaryawanController::class,'edit'])->name('editkry');
Route::get('/deletekaryawan/{id}', [KaryawanController::class,'destroy'])->name('deletekaryawan');

Route::get('jabatan', [JabatanController::class,'index'])->name('jabatan');
Route::post('insertdata', [JabatanController::class,'insertdata'])->name('insertdata');
Route::get('/tambahjabatan', [JabatanController::class,'tambahjabatan'])->name('tambahjabatan');
Route::get('/update/{id}', [JabatanController::class,'update'])->name('update');
Route::get('/edit/{id}', [JabatanController::class,'edit'])->name('edit');
Route::DELETE('/delete/{id}', [JabatanController::class,'delete'])->name('delete');

Route::resource('absensi', AbsensiController::class);
Route::get('/tambahabs', [AbsensiController::class,'create'])->name('tambahabs');
Route::DELETE('delete/{id}', [AbsensiController::class, 'delete'])->name('delete');
Route::get('/update/{id}', [AbsensiController::class,'update'])->name('update');
Route::get('/edit/{id}', [AbsensiController::class,'edit'])->name('edit');
Route::PUT('/store', [AbsensiController::class,'store'])->name('store');

//Route::resource('lembur', LemburController::class);
Route::get('lembur', [LemburController::class,'index'])->name('lembur');
Route::get('/tambahlmbr', [LemburController::class,'tambah'])->name('tambahlmbr');
Route::post('/buatlembur', [LemburController::class,'create'])->name('buatlembur');
Route::post('/store', [LemburController::class,'store'])->name('store');
Route::DELETE('/delete/{id}', [LemburController::class,'destroy'])->name('delete');
Route::resource('cuti', CutiController::class);
Route::get('/tambahcuti', [CutiController::class,'create'])->name('tambahcuti');
