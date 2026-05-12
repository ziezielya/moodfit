@extends('admin.layouts.app')

@section('title', 'produk')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Produk</h1>
    </div>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <div class="form-group">
            <label>Style</label>
            <select name="style_id" class="form-control">
                @foreach ($styles as $style)
                    <option value="{{ $style->id }}">{{ $style->nama_style }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
@endsection