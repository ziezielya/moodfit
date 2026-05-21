@extends('admin.layouts.app')

@section('title', 'Tambah Produk Baru - MoodFit')
@section('page-title', 'Tambah Produk')

@section('content')

<div class="max-w-3xl mx-auto w-full">

    <div class="bg-white/80 backdrop-blur-md rounded-[32px] shadow-lg border border-yellow-100/80 p-6 md:p-10 transition-all duration-300">

        <!-- HEADER -->
        <div class="mb-8">
            <h1 class="text-2xl md:text-3xl font-black text-amber-950 tracking-tight">
                Tambah Produk Busana
            </h1>
            <p class="text-xs text-amber-700/80 font-medium mt-1.5">
                Masukkan rincian informasi untuk menambahkan koleksi fashion premium terbaru ke katalog MoodFit.
            </p>
        </div>

        <!-- FORM -->
        <form
            action="/admin/produk"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6"
        >
            @csrf

            <!-- NAMA PRODUK -->
            <div class="space-y-2">
                <label class="block text-xs font-black tracking-wider uppercase text-amber-900">
                    Nama Pakaian / Produk
                </label>
                <input
                    type="text"
                    name="nama_produk"
                    placeholder="Contoh: Hoodie Oversize Neo-Heritage"
                    class="w-full bg-[#fffaf0]/40 border border-yellow-100 focus:border-yellow-400 rounded-2xl px-5 py-4 outline-none focus:ring-4 focus:ring-yellow-300/40 text-sm font-medium transition-all duration-300"
                    required
                >
            </div>

            <!-- GRID: HARGA & STYLE -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- HARGA -->
                <div class="space-y-2">
                    <label class="block text-xs font-black tracking-wider uppercase text-amber-900">
                        Harga (Rupiah)
                    </label>
                    <div class="relative">
                        <span class="absolute left-5 top-1/2 -translate-y-1/2 font-bold text-sm text-amber-800">Rp</span>
                        <input
                            type="number"
                            name="harga"
                            placeholder="Contoh: 250000"
                            class="w-full bg-[#fffaf0]/40 border border-yellow-100 focus:border-yellow-400 rounded-2xl pl-12 pr-5 py-4 outline-none focus:ring-4 focus:ring-yellow-300/40 text-sm font-bold transition-all duration-300"
                            required
                        >
                    </div>
                </div>

                <!-- STYLE -->
                <div class="space-y-2">
                    <label class="block text-xs font-black tracking-wider uppercase text-amber-900">
                        Kategori / Style Fashion
                    </label>
                    <div class="relative">
                        <select
                            name="style_id"
                            class="w-full bg-[#fffaf0]/40 border border-yellow-100 focus:border-yellow-400 rounded-2xl px-5 py-4 outline-none focus:ring-4 focus:ring-yellow-300/40 text-sm font-semibold text-gray-700 transition-all duration-300 appearance-none"
                            required
                        >
                            @foreach($styles as $style)
                                <option value="{{ $style->id }}">
                                    {{ $style->nama_style }}
                                </option>
                            @endforeach
                        </select>
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-amber-600 pointer-events-none">
                            <i class="fas fa-chevron-down text-xs"></i>
                        </span>
                    </div>
                </div>

            </div>

            <!-- GAMBAR UPLOAD -->
            <div class="space-y-2">
                <label class="block text-xs font-black tracking-wider uppercase text-amber-900">
                    Unggah Gambar Produk
                </label>
                <div class="relative group border-2 border-dashed border-yellow-200 hover:border-yellow-400 bg-[#fffaf0]/20 rounded-2xl p-6 transition-all duration-300 text-center flex flex-col items-center justify-center cursor-pointer">
                    <input
                        type="file"
                        name="gambar"
                        id="image-upload"
                        class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        onchange="previewImage(event)"
                        required
                    >
                    <div id="upload-placeholder" class="space-y-3 flex flex-col items-center justify-center">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-amber-950">Klik untuk mengunggah berkas foto</p>
                            <p class="text-[10px] text-amber-600/70 font-semibold uppercase tracking-wider mt-1">Format: JPG, PNG (Max. 2MB)</p>
                        </div>
                    </div>
                    <div id="image-preview-container" class="hidden relative max-w-xs rounded-xl overflow-hidden shadow-md border border-yellow-100">
                        <img id="image-preview" src="#" alt="Pratinjau Gambar" class="w-full object-cover max-h-48">
                        <button type="button" onclick="removePreview(event)" class="absolute top-2 right-2 w-8 h-8 rounded-lg bg-black/60 hover:bg-black text-white flex items-center justify-center text-xs transition-all z-20">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="flex flex-col sm:flex-row gap-3 pt-4">
                
                <button
                    type="submit"
                    class="flex-1 bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 hover:from-amber-500 hover:to-yellow-500 text-amber-950 font-black py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl hover:scale-[1.01] active:scale-[0.99] transition-all duration-300 text-sm flex items-center justify-center gap-2"
                >
                    <i class="fas fa-save text-xs"></i>
                    <span>Simpan Koleksi Baru</span>
                </button>

                <a href="/admin/produk"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-4 px-8 rounded-2xl text-sm transition-all duration-300 hover:scale-[1.01] text-center flex items-center justify-center">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

<!-- Image preview handling script -->
<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        reader.onload = function(){
            const dataURL = reader.result;
            const preview = document.getElementById('image-preview');
            const container = document.getElementById('image-preview-container');
            const placeholder = document.getElementById('upload-placeholder');
            
            preview.src = dataURL;
            container.classList.remove('hidden');
            placeholder.classList.add('hidden');
        };
        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removePreview(event) {
        event.stopPropagation();
        event.preventDefault();
        
        const input = document.getElementById('image-upload');
        const preview = document.getElementById('image-preview');
        const container = document.getElementById('image-preview-container');
        const placeholder = document.getElementById('upload-placeholder');
        
        input.value = '';
        preview.src = '#';
        container.classList.add('hidden');
        placeholder.classList.remove('hidden');
    }
</script>

@endsection