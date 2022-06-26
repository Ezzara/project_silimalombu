<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\adminProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\UserProfileController;

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
Route::get('admin', [adminProfileController::class,'index']);
Route::get('/pesanan', [OrderController::class, 'buat']);
Route::get('/pembeli/produk', [PembeliController::class, 'daftarProduk'])->name('pembeli.produk');
Route::get('/', [PembeliController::class, 'welcome'])->name('welcome');
//Route::get('detail_produk', [PembeliController::class, 'show'])->name('pembeli.show');

Route::get('cart', [PembeliController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PembeliController::class, 'addToCart'])->name('add.to.cart');
Route::delete('remove-from-cart', [PembeliController::class, 'remove'])->name('remove.from.cart');

Route::get('/pembeli/notifikasi', [PembeliController::class, 'notif'])->name('pembeli.notif');
Route::get('/pembeli/tentang', [PembeliController::class, 'about'])->name('pembeli.about');
Route::get('/pembeli/qa', [PembeliController::class, 'qa'])->name('pembeli.qa');
Route::get('/user/profile', [UserProfileController::class, 'index'])->name('user.profile');


Route::get('logout', [PembeliController::class, 'logout'])->name('user.logout');

Route::get('/admin/profile', [adminProfileController::class,'index'])->name('admin.profile');
Route::get('/admin/profile/edit',[adminProfileController::class,'edit'])->name('admin.profile.edit');
Route::put('/admin/profile/update',[adminProfileController::class,'update'])->name('admin.profile.update');

Route::get('/admin/user_data', [UserController::class,'index'])->name('admin.userdata');
Route::post('/admin/delete/{id}', [UserController::class ,'delete'])    
    ->middleware('is_admin')    
    ->name('admin.user.delete');

Route::put('/profile/update',[UserProfileController::class,'update'])->name('profile.update');
Route::get('admin/penjualan', function () { return view('admin.laporan_penjualan.index');})->name('admin.penjualan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', function () { return view('welcome');});

Route::resource('produk',ProdukController::class);
Route::resource('kategori',KategoriController::class);
Route::resource('order',OrderController::class);
Route::resource('biaya',BiayaController::class);
Route::resource('keranjang',KeranjangController::class);
Route::resource('bayar',BayarController::class);
Route::resource('pembeli',PembeliController::class);
//Route::resource('admin',UserController::class);
//Route::resource('profile',UserProfileController::class);

//Route::resource('pembeli',PembeliController::class);


