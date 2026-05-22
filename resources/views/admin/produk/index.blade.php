@extends('admin.sidebar')

@section('title', 'Kelola Produk - MoodFit')
@section('page-title', 'Kelola Produk')

@section('content')

<div class="bg-white/80 backdrop-blur-md rounded-[32px] p-6 md:p-8 shadow-lg border border-yellow-100/80">

    <!-- HEADER & SEARCH -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-6 mb-8">

        <div>
            <h1 class="text-2xl font-black text-amber-950 tracking-tight">
                Katalog Produk MoodFit
            </h1>
            <p class="text-xs text-amber-700/80 font-medium mt-1">
                Kelola, tambah, perbarui, atau hapus koleksi pakaian busana premium MoodFit.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">

            <!-- SEARCH FORM -->
            <!-- <form action="/admin/produk" method="GET" class="flex-1 sm:flex-none">
                <div class="relative">
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari produk atau style..."
                        class="w-full sm:w-72 bg-white border border-yellow-100 focus:border-yellow-400 rounded-2xl py-3.5 pl-5 pr-14 outline-none focus:ring-4 focus:ring-yellow-300/40 text-sm font-medium transition-all duration-300"
                    >
                    <button
                        type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 rounded-xl bg-amber-400 hover:bg-amber-500 text-amber-950 flex items-center justify-center transition-all shadow-sm active:scale-95"
                    >
                        <i class="fas fa-search text-sm"></i>
                    </button>
                </div>
            </form> -->

            <!-- ADD PRODUCT BUTTON -->
            <a href="{{ url('/admin/produk/create') }}"
               class="bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 hover:from-amber-500 hover:to-yellow-500 text-amber-950 font-black px-6 py-3.5 rounded-2xl shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 text-sm text-center flex items-center justify-center gap-2">
                <i class="fas fa-plus-circle"></i>
                <span>Tambah Produk</span>
            </a>

        </div>

    </div>

    <!-- TABLE CONTAINER -->
    <div class="overflow-x-auto rounded-2xl border border-yellow-100/50">

        <table class="w-full min-w-[700px] border-collapse">

            <thead>
                <tr class="bg-yellow-50/50 border-b border-yellow-100 text-left">
                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900 w-[45%]">
                        Detail Produk
                    </th>
                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900 w-[20%]">
                        Style Fashion
                    </th>
                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900 w-[20%]">
                        Harga Satuan
                    </th>
                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900 w-[15%] text-center">
                        Tindakan
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-yellow-50/40 bg-white/40">

                @forelse($produks as $item)
                <tr class="hover:bg-yellow-50/30 transition-all duration-200">

                    <!-- PRODUK DETAIL -->
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl overflow-hidden border border-yellow-100 bg-amber-50 shadow-sm shrink-0">
                            
                            <img
                                src="{{ asset('produk/' . $item->gambar) }}"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"
                                alt=""
                            >
                            </div>
                            <div>
                                <h3 class="font-bold text-amber-950 text-base leading-tight">
                                    {{ $item->nama_produk }}
                                </h3>
                                <p class="text-[10px] font-semibold tracking-wider text-amber-600/80 uppercase mt-1">
                                    ID Produk #{{ $item->id }}
                                </p>
                            </div>
                        </div>
                    </td>

                    <!-- STYLE -->
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center bg-yellow-100/70 border border-yellow-200 text-amber-900 px-3.5 py-1.5 rounded-xl text-xs font-bold shadow-sm">
                            <i class="fas fa-tags text-[10px] text-amber-600 mr-1.5"></i>
                            {{ $item->style->nama_style ?? 'Universal' }}
                        </span>
                    </td>

                    <!-- HARGA -->
                    <td class="px-6 py-4">
                        <div class="font-extrabold text-amber-950 text-base">
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </div>
                    </td>

                    <!-- ACTIONS -->
                    <td class="px-6 py-4">
                        <div class="flex justify-center items-center gap-2">
                            
                            <!-- EDIT BUTTON -->
                            <a href="{{ url('/admin/produk/' . $item->id . '/edit') }}"
                               class="w-10 h-10 rounded-xl bg-amber-100 hover:bg-amber-200 text-amber-900 flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95 shadow-sm"
                               title="Edit Produk">
                                <i class="fas fa-pen text-xs"></i>
                            </a>

                            <!-- DELETE FORM -->
                            <form action="{{ url('/admin/produk/' . $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk {{ $item->nama_produk }} ini?')"
                                    class="w-10 h-10 rounded-xl bg-rose-50 hover:bg-rose-100 text-rose-600 flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95 shadow-sm"
                                    title="Hapus Produk"
                                >
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-amber-800/60 font-bold">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <i class="fas fa-box-open text-4xl opacity-50"></i>
                            <span>Tidak ada data produk ditemukan.</span>
                        </div>
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection