<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Style;

class ProdukController extends Controller
{

    // =========================
    // INDEX
    // =========================
    public function index(Request $request)
    {
        $search = strtolower($request->search);

        $produks = Produk::with('style')->latest()->get();

        // SEARCH
        if ($search) {

            $produks = $produks->filter(function ($item) use ($search) {

                return str_contains(strtolower($item->nama_produk), $search)

                    || str_contains(
                        strtolower($item->style->nama_style ?? ''),
                        $search
                    );
            });
        }

        return view('admin.produk.index', compact('produks'));
    }

    // =========================
    // CREATE
    // =========================
    public function create()
    {
        $styles = Style::all();

        return view('admin.pages.produk.create', compact('styles'));
    }

    // =========================
    // STORE
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'style_id' => 'required',
            'gambar' => 'required|image'
        ]);

        $gambar = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('produk'), $gambar);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'style_id' => $request->style_id,
            'gambar' => $gambar,
        ]);

        return redirect('/admin/produk')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    // =========================
    // EDIT
    // =========================
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        $styles = Style::all();

        return view('admin.pages.produk.edit', compact('produk', 'styles'));
    }

    // =========================
    // UPDATE
    // =========================
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $data = [
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'style_id' => $request->style_id,
        ];

        // CEK JIKA UPLOAD GAMBAR BARU
        if ($request->hasFile('gambar')) {

            $gambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('produk'), $gambar);

            $data['gambar'] = $gambar;
        }

        $produk->update($data);

        return redirect('/admin/produk')
            ->with('success', 'Produk berhasil diupdate');
    }

    // =========================
    // DELETE
    // =========================
    public function destroy($id)
    {
        Produk::destroy($id);

        return back()
            ->with('success', 'Produk berhasil dihapus');
    }
}