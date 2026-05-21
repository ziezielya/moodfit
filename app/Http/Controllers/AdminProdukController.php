<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar')->store('produk', 'public');

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('produk', 'public');

            $produk->gambar = $gambar;
        }

        $produk->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        Produk::destroy($id);

        return redirect()->back();
    }
}