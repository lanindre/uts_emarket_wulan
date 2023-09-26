<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UsersController;
use App\Models\pelanggan;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index']);
Route::get('profile',[HomeController::class, 'profile']);
Route::get('contact',[HomeController::class, 'contact']);
Route::resource('produk', ProdukController::class);
Route::resource('barang', BarangController::class);
Route::resource('pemasok', PemasokController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('users', UsersController::class);
Route::resource('pembelian', PembelianController::class);
Route::get('faq',[HomeController::class, 'faq']);
Route::put('/produk/{id}','ProdukController@update')->name('update.produk');