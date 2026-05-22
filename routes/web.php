<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;

Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])
    ->name('admin.produk.edit');

Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])
    ->name('admin.produk.update');
    
Route::get('/pembayaran/{id}', [PembayaranController::class, 'create'])
    ->name('pembayaran.create');

Route::post('/pembayaran/store', [PembayaranController::class, 'store'])
    ->name('pembayaran.store');

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
// CUSTOMER AUTH
Route::get('/login', [AuthController::class, 'showUserLogin'])->name('login');
Route::post('/login', [AuthController::class, 'userLogin'])->name('login.post');

// LOGOUT ADMIN 
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | PRODUK
    |--------------------------------------------------------------------------
    */

    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

    /*
    |--------------------------------------------------------------------------
    | PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy'])
        ->name('pembayaran.destroy');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])
        ->name('pembayaran');

});