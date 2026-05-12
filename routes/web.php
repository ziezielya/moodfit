<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembayaranController;


Route::get('/admin/pembayaran/create/{id}', [PembayaranController::class, 'create'])
    ->name('pembayaran.create');

Route::post('/admin/pembayaran/store', [PembayaranController::class, 'store'])
    ->name('pembayaran.store');

Route::prefix('admin')->group(function () {

    Route::resource('style', StyleController::class);
    Route::resource('produk', ProdukController::class);

});

Route::get('/home', function () {
    return view('admin.pages.home.index');
})->name('home');

Route::get('/tentang', function () {
    return view('admin.pages.tentang.index');
})->name('tentang');

Route::get('/kontak', function () {
    return view('admin.pages.kontak.index');
})->name('kontak');

Route::get('/gallery', function () {
    return view('admin.pages.gallery.index');
})->name('gallery');

Route::get('/produk', function () {
    return view('admin.pages.produk.index');
})->name('produk');

