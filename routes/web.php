<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Daftarobat;

use App\Http\Controllers\KasirController;


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

Route::get('/obat', function () {
    return view('admin/daftarObat');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/obat', [AdminController::class, 'obat'])->name('obat');
    });
    Route::group(['middleware' => ['cek_login:kasir']], function () {
        Route::get('/kasir', [KasirController::class, 'index']);
    });

    Route::resource('/daftarObat', Daftarobat::class);
});
