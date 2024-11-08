<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\TransaksiController;

Route::resource('transaksi', TransaksiController::class);


Route::resource('laporanpenjualan', LaporanPenjualanController::class);


Route::resource('diskon', DiskonController::class);


Route::resource('stok', StokController::class);


Route::resource('kategori', KategoriController::class);


Route::resource('produk', ProdukController::class);



Route::get('/', function () {
    return view('welcome');
});
