@extends('customer.layouts.app')

@section('title', 'Pembayaran')

@section('content')

<style>

    body{
        background:
        linear-gradient(135deg, #fffdf4 0%, #fff8dd 40%, #fff4c2 100%);
    }

    .payment-wrapper{
        padding: 70px 0;
    }

    .payment-title{
        font-size: 42px;
        font-weight: 900;
        color: #5b3b07;
        margin-bottom: 10px;
    }

    .payment-subtitle{
        color: #a16207;
        font-size: 15px;
    }

    .payment-card{
        background: rgba(255,255,255,0.72);
        backdrop-filter: blur(16px);
        border-radius: 35px;
        border: 1px solid rgba(255,255,255,0.7);
        box-shadow: 0 15px 40px rgba(251,191,36,0.12);
        overflow: hidden;
    }

    .product-preview{
        background:
        linear-gradient(135deg, #fff7d6, #fff0b3);
        border-radius: 25px;
        padding: 25px;
        margin-bottom: 30px;
    }

    .product-preview h4{
        font-weight: 800;
        color: #5b3b07;
        margin-bottom: 10px;
    }

    .product-price{
        font-size: 28px;
        font-weight: 900;
        color: #b45309;
    }

    .form-label{
        font-weight: 700;
        color: #78350f;
        margin-bottom: 10px;
    }

    .custom-input,
    .custom-select,
    .custom-textarea{
        border: none !important;
        background: rgba(255,255,255,0.9) !important;
        border-radius: 18px !important;
        padding: 15px 18px !important;
        box-shadow: 0 5px 20px rgba(251,191,36,0.08);
        color: #5b3b07 !important;
    }

    .custom-input:focus,
    .custom-select:focus,
    .custom-textarea:focus{
        box-shadow: 0 0 0 4px rgba(250,204,21,0.25) !important;
    }

    .btn-payment{
        background: linear-gradient(135deg, #facc15, #f59e0b);
        border: none;
        color: #5b3b07;
        font-weight: 800;
        padding: 15px 30px;
        border-radius: 18px;
        transition: 0.3s;
        box-shadow: 0 10px 25px rgba(245,158,11,0.20);
    }

    .btn-payment:hover{
        transform: translateY(-2px);
        color: white;
        box-shadow: 0 15px 30px rgba(245,158,11,0.30);
    }

    .btn-back{
        background: rgba(255,255,255,0.8);
        border: 1px solid #fde68a;
        color: #92400e;
        font-weight: 700;
        padding: 15px 25px;
        border-radius: 18px;
        transition: 0.3s;
    }

    .btn-back:hover{
        background: #fff7d6;
        color: #78350f;
    }

    .success-alert{
        background: rgba(220,252,231,0.7);
        border: 1px solid #bbf7d0;
        color: #166534;
        padding: 18px 22px;
        border-radius: 20px;
        margin-bottom: 25px;
        font-weight: 600;
    }

</style>

<div class="container payment-wrapper">

    {{-- HEADER --}}
    <div class="text-center mb-5">

        <h1 class="payment-title">
            Checkout Pembayaran
        </h1>

        <p class="payment-subtitle">
            Lengkapi data pembelian fashion premium MoodFit
        </p>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="payment-card p-4 p-lg-5">

                @if(session('success'))

                    <div class="success-alert">
                        {{ session('success') }}
                    </div>

                @endif

                <form action="{{ route('pembayaran.store') }}" method="POST">

                    @csrf

                    <input type="hidden"
                           name="produk_id"
                           value="{{ $produk->id }}">

                    {{-- PRODUCT --}}
                    <div class="product-preview">

                        <h4>
                            {{ $produk->nama_produk }}
                        </h4>

                        <div class="product-price">
                            Rp {{ number_format($produk->harga,0,',','.') }}
                        </div>

                    </div>

                    {{-- NAMA --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Nama Customer
                        </label>

                        <input type="text"
                               name="nama_customer"
                               class="form-control custom-input"
                               placeholder="Masukkan nama lengkap"
                               required>

                    </div>

                    {{-- TELP --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Nomor Telepon
                        </label>

                        <input type="text"
                               name="no_telp"
                               class="form-control custom-input"
                               placeholder="08xxxxxxxxxx"
                               required>

                    </div>

                    {{-- ALAMAT --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Alamat Lengkap
                        </label>

                        <textarea name="alamat"
                                  rows="4"
                                  class="form-control custom-textarea"
                                  placeholder="Masukkan alamat lengkap"
                                  required></textarea>

                    </div>

                    {{-- UKURAN --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Pilih Ukuran
                        </label>

                        <select name="ukuran_detail"
                                class="form-select custom-select"
                                required>

                            <option value="">
                                Pilih Ukuran
                            </option>

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

                    {{-- METODE --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Metode Pembayaran
                        </label>

                        <select name="metode"
                                class="form-select custom-select"
                                required>

                            <option value="">
                                Pilih Metode
                            </option>

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

                    {{-- CATATAN --}}
                    <div class="mb-5">

                        <label class="form-label">
                            Catatan Tambahan
                        </label>

                        <textarea name="catatan"
                                  rows="4"
                                  class="form-control custom-textarea"
                                  placeholder="Tambahkan catatan jika diperlukan"></textarea>

                    </div>

                    {{-- BUTTON --}}
                    <div class="d-flex flex-wrap gap-3">

                        <button type="submit"
                                class="btn btn-payment">

                            <i class="fas fa-credit-card me-2"></i>
                            Bayar Sekarang

                        </button>

                        <a href="{{ route('produk') }}"
                           class="btn btn-back">

                            <i class="fas fa-arrow-left me-2"></i>
                            Kembali Produk

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection