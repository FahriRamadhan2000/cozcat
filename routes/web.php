<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Login_adminController;

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

Route::get('/', function () {
    return view('home', [
        "img1" => "logo3.png",
        "img2" => "kucing2.png"
    ]);
});  
//halamamn single route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/detail_produk/{slug}', [PostController::class, 'deproduk'])->middleware('auth');
Route::get('/dashboard', [PostController::class, 'index'])->middleware('auth');
Route::get('/search', [PostController::class, 'search'])->middleware('auth')->name('scr');

Route::get('/toko', [PostController::class, 'produk'])->middleware('auth');
Route::get('/detail_produk/{post}', [PostController::class, 'show']);

Route::get('/toko_tambah_produk', [PostController::class, 'tambah_produk'])->middleware('auth');
Route::post('/toko_tambah_produk', [PostController::class, 'store']);



Route::get('/pesanan/{post}', [PesananController::class, 'index'])->middleware('auth');
Route::post('/pesanan', [PesananController::class, 'store']);
Route::get('/pesanan_print', [PesananController::class, 'print']);


Route::get('/pesan', [PesananController::class, 'pesan'])->middleware('auth');
Route::get('/pesanan_saya', [PesananController::class, 'pesanans'])->middleware('auth');
Route::get('/dibatalkan', [PesananController::class, 'batalkan'])->middleware('auth');


//akun
Route::get('/akun', [AkunController::class, 'index'])->middleware('auth');
Route::get('/input_akun', [AkunController::class, 'create']);
Route::post('/input_akun', [AkunController::class, 'store']);




// admin
Route::middleware(['auth:user_admin'])->group(function(){
        Route::get('/home_admin', [Login_adminController::class, 'hom_a']);
        Route::get('/order', [PesananController::class, 'order']);
        Route::get('/produk_cozcat', [PostController::class, 'produk_a']);
        Route::get('/user', [LoginController::class, 'user']);
        Route::get('/user_admin', [Login_adminController::class, 'user_a']);
});

Route::get('/admin', [Login_adminController::class, 'index'])->name('user_admin')->middleware('guest');
Route::post('/admin', [Login_adminController::class, 'authenticate']);
Route::post('/logout_a', [Login_adminController::class, 'logout']);