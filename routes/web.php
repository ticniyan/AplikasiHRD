<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karyawan\KaryawanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
 //   return view('Home.dashboard');
//});

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(
    ['middleware' => 'auth', 'CekleLevel:admin'],
    function () {

        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        
        Route::resource('karyawan', KaryawanController::class);
        Route::get('karyawan.index', [KaryawanController::class,'index'])->name('karyawanindex');
        Route::get('tambahkry', [KaryawanController::class,'create'])->name('tambahkry');
        Route::post('/updatekry/{id}', [KaryawanController::class,'update'])->name('updatekry');
        Route::get('/editkry/{id}', [KaryawanController::class,'edit'])->name('editkry');
        Route::get('/deletekaryawan/{id}', [KaryawanController::class,'destroy'])->name('deletekaryawan');

        Route::get('jabatan', [JabatanController::class,'index'])->name('jabatan');
        Route::post('insertdata', [JabatanController::class,'insertdata'])->name('insertdata');
        Route::get('/tambahjabatan', [JabatanController::class,'tambahjabatan'])->name('tambahjabatan');
        Route::get('/update/{id}', [JabatanController::class,'update'])->name('update');
        Route::get('/edit/{id}', [JabatanController::class,'edit'])->name('edit');
        Route::post('/store', [JabatanController::class,'store'])->name('store');
        Route::get('/deletejabatan/{id}', [JabatanController::class,'destroy'])->name('deletejabatan');

        Route::resource('absensi', AbsensiController::class);
        Route::get('/tambahabs', [AbsensiController::class,'create'])->name('tambahabs');
        Route::get('deleteabsen/{id}', [AbsensiController::class, 'destroy'])->name('deleteabsen');
        Route::get('/update/{id}', [AbsensiController::class,'update'])->name('update');
        Route::get('/edit/{id}', [AbsensiController::class,'edit'])->name('edit');
        Route::post('/absensistore', [AbsensiController::class,'absensistore'])->name('absensistore');

        Route::resource('lembur', LemburController::class);
        Route::get('lembur.index', [LemburController::class,'index'])->name('lembur.index');
        Route::get('/tambahlmbr', [LemburController::class,'tambah'])->name('tambahlmbr');
        Route::post('/buatlembur', [LemburController::class,'create'])->name('buatlembur');
        Route::post('/storelembur', [LemburController::class,'storelembur'])->name('storelembur');
        Route::get('/delete/{id}', [LemburController::class,'destroy'])->name('delete');

        Route::resource('cuti', CutiController::class);
        Route::get('/tambahcuti', [CutiController::class,'tambah'])->name('tambahcuti');
        Route::get('cuti', [CutiController::class,'index'])->name('cuti');
        Route::get('tambahcuti', [CutiController::class,'create'])->name('tambahcuti');
        Route::post('/update/{id}', [CutiController::class,'update'])->name('update');
        Route::get('/edit/{id}', [CutiController::class,'edit'])->name('editcuti');
        Route::get('/deletecuti/{id}', [CutiController::class,'destroy'])->name('deletecuti');
        Route::post('/cutistore', [CutiController::class,'store'])->name('cutistore');
        
      }
);

Route::group(
    ['middleware' => 'auth', 'CekleLevel:user'],
    function () {
        
          Route::resource('absensi', AbsensiController::class);
        Route::get('/tambahabs', [AbsensiController::class,'create'])->name('tambahabs');
        Route::get('deleteabsen/{id}', [AbsensiController::class, 'destroy'])->name('deleteabsen');
        Route::get('/update/{id}', [AbsensiController::class,'update'])->name('update');
        Route::get('/edit/{id}', [AbsensiController::class,'edit'])->name('edit');
        Route::post('/absensistore', [AbsensiController::class,'absensistore'])->name('absensistore');

        Route::resource('lembur', LemburController::class);
        Route::get('lembur.index', [LemburController::class,'index'])->name('lembur.index');
        Route::get('/tambahlmbr', [LemburController::class,'tambah'])->name('tambahlmbr');
        Route::post('/buatlembur', [LemburController::class,'create'])->name('buatlembur');
        Route::post('/storelembur', [LemburController::class,'storelembur'])->name('storelembur');
        Route::get('/delete/{id}', [LemburController::class,'destroy'])->name('delete');

        Route::resource('cuti', CutiController::class);
        Route::get('/tambahcuti', [CutiController::class,'tambah'])->name('tambahcuti');
        Route::get('cuti', [CutiController::class,'index'])->name('cuti');
        Route::get('tambahcuti', [CutiController::class,'create'])->name('tambahcuti');
        Route::post('/update/{id}', [CutiController::class,'update'])->name('update');
        Route::get('/edit/{id}', [CutiController::class,'edit'])->name('editcuti');
        Route::get('/deletecuti/{id}', [CutiController::class,'destroy'])->name('deletecuti');
        Route::post('/cutistore', [CutiController::class,'store'])->name('cutistore');
        
      }
);

