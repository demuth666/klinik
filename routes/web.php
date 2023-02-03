<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Daftarobat;
use App\Http\Controllers\Obatexp;
use App\Http\Controllers\Obathabis;
use App\Http\Controllers\Namaobat;
use App\Http\Controllers\Golonganobat;
use App\Http\Controllers\Unit;
use App\Http\Controllers\Jenis;


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

// Route::get('/obat', function () {
//     return view('admin/daftarObat');
// });

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/obat', [DaftarObat::class, 'index'])->name('daftar.obat');
        Route::get('/obat/add', [DaftarObat::class, 'add'])->name('add.obat');
        Route::get('/obatexp', [Obatexp::class, 'index'])->name('daftar.obatexp');
        Route::get('/obathabis', [Obathabis::class, 'index'])->name('daftar.obathabis');
        Route::get('/namaobat', [Namaobat::class, 'index'])->name('nama.namaobat');
        Route::get('/nama/addnama', [Namaobat::class, 'add'])->name('add.nama');
        Route::get('/nama/editnama', [Namaobat::class, 'edit'])->name('edit.nama');
        Route::get('/Gol_obat', [Golonganobat::class, 'index'])->name('nama.Gol_obat');
        Route::get('/unit', [Unit::class, 'index'])->name('nama.unit');
        Route::get('/jenis', [Jenis::class, 'index'])->name('nama.jenis');
    });
    Route::group(['middleware' => ['cek_login:kasir']], function () {
        Route::get('/kasir', [KasirController::class, 'index']);
    });

    Route::resource('/daftarObat', Daftarobat::class);
});