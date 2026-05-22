<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    // HOME
    public function home()
    {
        return view('customer.pages.home.index');
    }

    // TENTANG
    public function tentang()
    {
        return view('customer.pages.tentang.index');
    }

    // PRODUK
    public function produk(Request $request)
{
    $produks = Produk::with(['style', 'reviews'])->get();

    return view('customer.pages.produk.index', compact('produks'));
}

    // GALLERY
    public function gallery()
    {
        return view('customer.pages.gallery.index');
    }

    // KONTAK
    public function kontak()
    {
        return view('customer.pages.kontak.index');
    }
}