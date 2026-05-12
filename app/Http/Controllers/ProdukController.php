<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Style;

class ProdukController extends Controller
{
    
public function index(Request $request)
{
    $search = strtolower($request->search);

    // CEK kalau database masih kosong
    if (Produk::count() == 0) {

        Produk::create([
            'nama_produk' => 'Warrior Elegance',
            'harga' => 300000,
            'gambar' => '20260425_194105.jpg',
            'style_id' => 1
        ]);

        Produk::create([
            'nama_produk' => 'Garuda Urban Layer',
            'harga' => 700000,
            'gambar' => '20260428_230059.jpg',
            'style_id' => 1
        ]);

        Produk::create([
            'nama_produk' => 'Azure Cloud Serenity',
            'harga' => 500000,
            'gambar' => '20260426_153617.jpg',
            'style_id' => 1
        ]);

        Produk::create([
            'nama_produk' => 'Heritage Smart Layer',
            'harga' => 800000,
            'gambar' => '20260426_184240.jpg',
            'style_id' => 1
        ]);

        Produk::create([
            'nama_produk' => 'Urban Street Cargo Outfit',
            'harga' => 800000,
            'gambar' => 'image_1a4bf4ea.png',
            'style_id' => 2
        ]);

        Produk::create([
            'nama_produk' => 'Olive Casual Chic',
            'harga' => 370000,
            'gambar' => 'image_26a0b39d.png',
            'style_id' => 2
        ]);

        Produk::create([
            'nama_produk' => 'Chic Preppy',
            'harga' => 450000,
            'gambar' => 'p7.png',
            'style_id' => 2
        ]);

        Produk::create([
            'nama_produk' => 'Quiet Luxury',
            'harga' => 700000,
            'gambar' => 'p8.png',
            'style_id' => 2
        ]);

        Produk::create([
            'nama_produk' => 'Commuter Look',
            'harga' => 1700000,
            'gambar' => 'f9.jpg',
            'style_id' => 3
        ]);

        Produk::create([
            'nama_produk' => 'Modern Tailoring',
            'harga' => 900000,
            'gambar' => 'f10.jpg',
            'style_id' => 3
        ]);

        Produk::create([
            'nama_produk' => 'Modern Tailoring',
            'harga' => 1300000,
            'gambar' => 'f11.jpg',
            'style_id' => 3
        ]);

        Produk::create([
            'nama_produk' => 'Modern Tailoring',
            'harga' => 1700000,
            'gambar' => 'f12.jpg',
            'style_id' => 3
        ]);


    }

    $produks = Produk::with('style')->get();

    // FILTER SEARCH
    if ($search) {
        $produks = $produks->filter(function ($item) use ($search) {
            return str_contains(strtolower($item->nama_produk), $search) ||
                str_contains(strtolower($item->style->nama_style), $search);
        });
    }

    return view('admin.pages.produk.index', compact('produks'));
}

}