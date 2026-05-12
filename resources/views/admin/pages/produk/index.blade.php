@extends('admin.layouts.app')

@section('title', 'produk')

@section('content')
    <div class="section">
    <!-- <div class="section-header"> -->
        <!-- <h2>Produk</h2> -->
    </div>
    <form action="{{ route('produk.index') }}" method="GET" class="form-inline mr-auto">

    <div class="search-element">
        <input class="form-control" 
            type="search" 
            name="search"
            placeholder="Cari produk / style..."
            value="{{ request('search') }}">

        <button class="btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    
    </div>

</form>

    <div class="row">
    @forelse ($produks as $item)
        <div class="col-md-3 mb-4">
            
            <div class="card shadow-sm" style="border-radius:15px;">
                
                <!-- Gambar -->
                <img src="{{ asset('img/' . $item->gambar) }}" 
                        class="card-img-top product-img"
                        style="height:390px; object-fit:cover;">

                <div class="card-body">
                    <!-- Nama Produk -->
                    <h5 class="card-title">{{ $item->nama_produk }}</h5>

                    <!-- Style dari relasi -->
                    <p class="text-muted mb-1">
                        Style: {{ $item->style->nama_style ?? '-' }}
                    </p>

                    <!-- Harga -->
                    <p class="fw-bold text-dark">
                        Rp {{ number_format($item->harga, 0, ',', '.') }}
                    </p>

                <div class="card-body">


                        <!-- Tombol User -->
                        <div class="btn-user">
                            <a href="{{ route('pembayaran.create', $item->id) }}" class="btn-beli">
                                Beli
                            </a>
                            <a href="#" class="btn btn-custom">Custom</a>
                        </div>

                        <!-- Tombol Admin -->
                        @if(auth()->user() && auth()->user()->role == 'admin')
                        <div class="btn-admin">
                            <a href="#" class="btn btn-edit">Edit</a>
                            <a href="#" class="btn btn-hapus">Hapus</a>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    @empty
        <p class="text-center">Belum ada produk</p>
    @endforelse

    
</div>
@endsection