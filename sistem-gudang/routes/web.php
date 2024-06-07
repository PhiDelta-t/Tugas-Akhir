<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiBarangKeluarController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RakController;

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
    return view ('welcome');
});
use App\Http\Controllers\TransaksiBarangMasukController;

Route::resource('/barangmasuk', TransaksiBarangMasukController::class);
Route::resource('/barangkeluar', TransaksiBarangKeluarController::class);
Route::resource('/barang', BarangController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('/rak', RakController::class);


