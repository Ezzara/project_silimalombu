<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\KeranjangController;
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

//Route::get('/', function () { return view('welcome');});

Route::resource('produk',ProdukController::class);
Route::resource('kategori',KategoriController::class);
Route::resource('order',OrderController::class);
Route::resource('biaya',BiayaController::class);
Route::resource('keranjang',KeranjangController::class);
//Route::resource('pembeli',PembeliController::class);

Route::get('/pembeli/produk', [PembeliController::class, 'daftarProduk']);
Route::get('/', [PembeliController::class, 'welcome']);

Route::get('cart', [PembeliController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PembeliController::class, 'addToCart'])->name('add.to.cart');
