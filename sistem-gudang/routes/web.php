<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiBarangKeluarController;
use App\Http\Controllers\TransaksiBarangMasukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RakController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses', [LoginController::class, 'proses'])->name('proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/barangmasuk', TransaksiBarangMasukController::class);
    Route::resource('/barangkeluar', TransaksiBarangKeluarController::class);
    Route::resource('/barang', BarangController::class);
    Route::resource('/supplier', SupplierController::class);
    Route::resource('/rak', RakController::class);
    Route::resource('/adm', AdminController::class);
});
