@extends('customer.layouts.app')

@section('title', 'Produk Moodfit')

@section('content')
<div class="section">
  <div class="section-header d-flex align-items-center justify-content-between mb-4">
    <div>
      <h1 class="mb-2">Produk Moodfit</h1>
      <p class="text-muted">Temukan gaya Neo-Heritage pilihan kamu.</p>
    </div>
    <form action="{{ route('produk') }}" method="GET" class="w-100" style="max-width:420px;">
      <div class="input-group shadow-sm rounded-pill bg-white overflow-hidden">
        <input type="search" name="search" class="form-control border-0" placeholder="Cari produk / style..." value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-warning rounded-pill ml-1 px-4" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>

  <div class="row">
    @forelse ($produks as $item)
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
          <div class="position-relative">
            <img src="{{ asset('img/' . $item->gambar) }}" class="card-img-top" style="height:340px; object-fit:cover;">
          </div>
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $item->nama_produk }}</h5>
            <p class="text-secondary mb-2">Style: {{ $item->style->nama_style ?? '-' }}</p>
            <p class="font-weight-bold text-dark mb-4">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
            <a href="{{ route('pembayaran.create', $item->id) }}" class="btn btn-warning btn-block text-dark">Beli</a>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12 text-center py-5">
        <p class="text-muted">Belum ada produk.</p>
      </div>
    @endforelse
  </div>
</div>
@endsection