<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Pastikan user sudah login
        if (!auth()->check()) {
            return back()->with('error', 'Silakan login terlebih dahulu untuk memberikan review');
        }

        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|min:10|max:500'
        ]);

        Review::create([
            'produk_id' => $request->produk_id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Ulasan Anda berhasil disimpan!');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        // Hanya user yang membuat review atau admin bisa hapus
        if (auth()->id() !== $review->user_id && auth()->user()->role !== 'admin') {
            return back()->with('error', 'Anda tidak memiliki akses untuk menghapus review ini');
        }

        $review->delete();
        return back()->with('success', 'Review berhasil dihapus');
    }
}