@extends('customer.layouts.app')

@section('title', 'Pembayaran')

@section('content')

<div class="section">

    <div class="section-header">
        <h1>Pembayaran</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf

        <input type="hidden"
               name="produk_id"
               value="{{ $produk->id }}">

        <div class="card p-4 mb-4">

            <h4>{{ $produk->nama_produk }}</h4>

            <h5 class="text-primary">
                Rp {{ number_format($produk->harga) }}
            </h5>

        </div>

        <div class="form-group">
            <label>Nama Customer</label>

            <input type="text"
                   name="nama_customer"
                   class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label>No Telepon</label>

            <input type="text"
                   name="no_telp"
                   class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label>Alamat</label>

            <textarea name="alamat"
                      class="form-control"
                      required></textarea>
        </div>

        <div class="form-group">
    <label>Ukuran</label>

    <select name="ukuran_detail"
            class="form-control"
            required>

        <option value="">Pilih Ukuran</option>

        <option value="S">
            S | BB 40-50 Kg | TB 145-155 cm
        </option>

        <option value="M">
            M | BB 50-60 Kg | TB 155-165 cm
        </option>

        <option value="L">
            L | BB 60-70 Kg | TB 165-175 cm
        </option>

        <option value="XL">
            XL | BB 70-80 Kg | TB 175-185 cm
        </option>

    </select>
</div>

        <div class="form-group">
            <label>Metode Pembayaran</label>

            <select name="metode"
                    class="form-control"
                    required>

                <option value="">Pilih Metode</option>
                <option value="Transfer Bank">
                    Transfer Bank
                </option>

                <option value="COD">
                    COD
                </option>

                <option value="E-Wallet">
                    E-Wallet
                </option>

            </select>
        </div>

        <div class="form-group">
            <label>Catatan</label>

            <textarea name="catatan"
                      class="form-control"></textarea>
        </div>

        <button type="submit"
                class="btn btn-primary">

            Bayar Sekarang

        </button>
        <a href="{{ route('produk') }}" class="btn btn-light">
            Kembali ke Produk
        </a>

</div>

    </form>

</div>

@endsection