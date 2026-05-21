<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HomeController;

Route::get('/pembayaran/{id}', [PembayaranController::class, 'create'])
    ->name('pembayaran.create');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

Route::get('/produk', [HomeController::class, 'produk'])->name('produk');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// LOGIN ADMIN
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');

// LOGOUT ADMIN 
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {

    // DASHBOARD
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | PRODUK
    |--------------------------------------------------------------------------
    */

    Route::resource('/admin/produk', ProdukController::class);


    /*
    |--------------------------------------------------------------------------
    | PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    Route::delete('/admin/pembayaran/{id}', [PembayaranController::class, 'destroy'])
    
    ->name('pembayaran.destroy');
    Route::get('/admin/pembayaran', [PembayaranController::class, 'index'])
        ->name('admin.pembayaran');

});