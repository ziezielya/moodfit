@extends('customer.layouts.app')

@section('title', 'Produk MoodFit')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>

    body{
        background: linear-gradient(to bottom, #dccfa7,#362b12, #54471e);
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
    }

    /* SECTION */
    .produk-section{
        padding: 120px 0 80px;
        position: relative;
    }

    /* HEADER */
    .produk-header{
        margin-bottom: 70px;
    }

    .produk-title{
        font-size: 54px;
        font-weight: 900;
        color: #3a2e0b;
        line-height: 1.1;
        margin-bottom: 18px;
        letter-spacing: 1px;
    }

    .produk-subtitle{
        color: #525237;
        font-size: 15px;
        max-width: 650px;
        line-height: 1.9;
    }

    /* SEARCH */
    .search-wrapper{
        background: rgba(214, 218, 181, 0.75);
        backdrop-filter: blur(14px);
        border: 1px solid #45370f;
        border-radius: 100px;
        padding: 8px;
        box-shadow: 0 10px 35px rgba(212,180,78,0.10);
    }

    .search-input{
        border: none !important;
        background: transparent !important;
        padding-left: 22px;
        font-size: 14px;
        color: #7a5c00;
    }

    .search-input::placeholder{
        color: #b79c5c;
    }

    .search-input:focus{
        box-shadow: none !important;
    }

    .search-btn{
        width: 56px;
        height: 56px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(135deg, #ffe28a, #7d765a);
        color: #7a5c00;
        font-size: 15px;
        transition: 0.35s;
    }

    .search-btn:hover{
        transform: scale(1.06);
        color: white;
        background: linear-gradient(135deg, #f4c84d, #dba514);
    }

    /* PRODUCT CARD */
    .product-card{
        background: rgba(255,255,255,0.78);
        backdrop-filter: blur(15px);
        border-radius: 34px;
        overflow: hidden;
        border: 1px solid #f7e4b4;
        box-shadow: 0 15px 40px rgba(212,180,78,0.12);
        transition: all 0.4s ease;
        position: relative;
        max-width: 880px;
        margin: auto;
        margin-bottom: 30px;
    }

    .product-card:hover{
        transform: translateY(-7px);
        box-shadow: 0 22px 50px rgba(212,180,78,0.18);
    }

    /* IMAGE */
    .product-image-wrapper{
        position: relative;
        overflow: hidden;
        min-height: 100%;
    }

    .product-image{
        width: 100%;
        height: 100%;
        min-height: 280px;
        object-fit: cover;
        transition: 0.5s;
    }

    .product-card:hover .product-image{
        transform: scale(1.05);
    }

    /* BADGE */
    .premium-badge{
        position: absolute;
        top: 18px;
        left: 18px;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(10px);
        padding: 9px 18px;
        border-radius: 100px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1px;
        color: #a17400;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        z-index: 10;
    }


   select.form-control {
    background-color: #fff6dc !important;
    border: 1px solid #f3d98b !important;
    color: #6b4d00 !important;

    border-radius: 12px;
    padding: 10px 12px;

    appearance: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
}

/* HILANGIN BIRU SAAT KLIK (FOCUS) */
select.form-control:focus {
    outline: none !important;
    box-shadow: 0 0 0 0.2rem rgba(244, 200, 77, 0.25) !important;
    border-color: #f4c84d !important;
}

/* OPTION LIST (yang biru di dropdown) */
select option:checked,
select option:hover {
    background: #f4c84d !important;
    color: #2f2107 !important;
}

/* ICON ARROW CUSTOM */
select.form-control {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg fill='%236b4d00' viewBox='0 0 20 20'%3E%3Cpath d='M5 7l5 5 5-5H5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 14px;
}

    /* CONTENT */
    .card-content{
        padding: 28px;
    }

    .product-name{
        font-size: 32px;
        font-weight: 800;
        color: #2f2107;
        margin-bottom: 12px;
    }

    .product-style{
        display: inline-block;
        background: #fff3c7;
        color: #a17400;
        padding: 8px 18px;
        border-radius: 100px;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .product-price{
        font-size: 34px;
        font-weight: 900;
        color: #7a5c00;
    }

    .product-desc{
        color: #807560;
        line-height: 1.9;
        margin-top: 18px;
        margin-bottom: 30px;
        font-size: 14px;
    }

    /* BUTTON */
    .btn-buy{
        border-radius: 18px;
        padding: 14px 24px;
        background: linear-gradient(135deg, #ffe28a, #f4c84d);
        color: #6b4d00;
        font-weight: 800;
        border: none;
        text-decoration: none;
        transition: 0.35s;
        font-size: 14px;
        box-shadow: 0 10px 20px rgba(244,200,77,0.20);
    }

    .btn-buy:hover{
        color: white;
        transform: translateY(-2px);
        background: linear-gradient(135deg, #f4c84d, #dba514);
        box-shadow: 0 14px 25px rgba(244,200,77,0.28);
    }

    .btn-custom{
        border-radius: 18px;
        padding: 14px 24px;
        background: white;
        border: 1px solid #f3d98b;
        color: #7a5c00;
        font-weight: 800;
        text-decoration: none;
        transition: 0.35s;
        font-size: 14px;
    }

    .btn-custom:hover{
        background: #fff4cf;
        color: #6b4d00;
        transform: translateY(-2px);
    }

    /* EMPTY */
    .empty-box{
        background: rgba(255,255,255,0.8);
        backdrop-filter: blur(14px);
        padding: 80px;
        border-radius: 35px;
        text-align: center;
        border: 1px solid #f6e2a8;
        box-shadow: 0 20px 40px rgba(212,180,78,0.10);
    }

    
    .empty-box i{
        color: #f4c84d;
    }

    .empty-title{
        color: #6b4d00;
        font-weight: 800;
    }

    /* RESPONSIVE */
    @media(max-width:992px){

        .produk-section{
            padding: 100px 20px 60px;
        }

        .produk-title{
            font-size: 40px;
        }

        .product-name{
            font-size: 26px;
        }

        .product-price{
            font-size: 28px;
        }

        .card-content{
            padding: 28px;
        }

        .product-image{
            min-height: 260px;
        }

    }


</style>

<div class="container produk-section">

    {{-- HEADER --}}
    <div class="row align-items-center produk-header">

        <div class="col-lg-7 mb-4 mb-lg-0">

            <h1 class="produk-title">
                Product Collection <br>
                
            </h1>

            <p class="produk-subtitle">
               Your Mood, Your Outfit. 
               Temukan koleksi fashion premium MoodFit yang dirancang untuk mengekspresikan gaya dan kepribadian Anda.
               Dengan desain
               
            </p>

        </div>

        <div class="col-lg-5">

            <form action="{{ url('/produk') }}" method="GET">

                <div class="d-flex align-items-center search-wrapper">

                    <input type="search"
                           name="search"
                           class="form-control search-input"
                           placeholder="Cari fashion premium..."
                           value="{{ request('search') }}">

                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>

                </div>

            </form>

        </div>

    </div>

    {{-- FORM REVIEW --}}
    @auth
    <div class="row mt-5 mb-5">
        <div class="col-lg-8">
            <div style="background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); border: 1px solid #f1e6c3; border-radius: 20px; padding: 28px; box-shadow: 0 15px 40px rgba(212,180,78,0.12);">
                
                <h4 style="color: #6b4d00; font-weight: 800; margin-bottom: 20px;">
                    <i class="fas fa-star me-2" style="color: #f4c84d;"></i> Berikan Rating & Review
                </h4>

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('/review/store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" style="color: #7a5c00; font-weight: 700;">Pilih Produk</label>
                            <select name="produk_id" class="form-control" required style="border-color: #f1e6c3;">
                                <option value="">-- Pilih Produk --</option>
                                @foreach($produks as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_produk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" style="color: #7a5c00; font-weight: 700;">Rating</label>
                            <select name="rating" class="form-control" required style="border-color: #f1e6c3;">
                                <option value="">-- Pilih Rating --</option>
                                <option value="5">★★★★★ Sangat Memuaskan</option>
                                <option value="4">★★★★ Memuaskan</option>
                                <option value="3">★★★ Cukup</option>
                                <option value="2">★★ Kurang</option>
                                <option value="1">★ Sangat Kurang</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label" style="color: #7a5c00; font-weight: 700;">Review Anda</label>
                            <textarea name="comment" class="form-control" rows="3" placeholder="Tulis review Anda di sini..." required style="border-color: #f1e6c3;"></textarea>
                            <small class="text-muted">Minimal 10 karakter, maksimal 500 karakter</small>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn" style="background: linear-gradient(135deg, #ffe28a, #f4c84d); color: #6b4d00; font-weight: 800; border: none; padding: 12px 28px; border-radius: 18px;">
                                <i class="fas fa-paper-plane me-2"></i> Kirim Review
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    @else
    <div class="row mt-5 mb-5">
        <div class="col-lg-8">
            <div style="background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); border: 1px solid #f1e6c3; border-radius: 20px; padding: 28px; text-align: center;">
                <p style="color: #7a5c00; margin: 0;">
                    <i class="fas fa-lock me-2"></i> Silakan <a href="{{ url('/login') }}" style="color: #f4c84d; text-decoration: none; font-weight: 700;">login</a> untuk memberikan review
                </p>
            </div>
        </div>
    </div>
    @endauth

    {{-- PRODUCT --}}
    <div class="row g-5">

        @forelse ($produks as $item)

        <div class="col-12">

            <div class="product-card d-flex flex-column flex-lg-row align-items-center">

                {{-- IMAGE --}}
                <div class="product-image-wrapper col-lg-4">

                   <img src="{{ asset('storage/' . $item->gambar) }}"
                    class="product-image"
                    alt="{{ $item->nama_produk }}">

<p>
    {{ $item->gambar }}
</p>

<p>
    {{ asset('storage/' . $item->gambar) }}
</p>

                    <div class="premium-badge">
                        PREMIUM
                    </div>

                </div>

                {{-- CONTENT --}}
                <div class="card-content col-lg-8">

                    <div class="d-flex flex-column h-100 justify-content-between">

                        <div>


                            <div class="mb-3">

                                <h3 class="product-name">
                                    {{ $item->nama_produk }}
                                </h3>

                                <div class="product-style mb-2">
                                    {{ $item->style->nama_style ?? 'Luxury Style' }}
                                </div>

                                <div class="product-price mt-1">
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </div>

                            </div>

                        @php
                            $avg = $item->reviews->avg('rating') ?? 0;
                            $count = $item->reviews->count();
                        @endphp

                        <div class="d-flex align-items-center gap-2 mb-3">

                            @for($i=1;$i<=5;$i++)
                                <i class="fas fa-star"
                                   style="color: {{ $i <= round($avg) ? '#f4c84d' : '#b8bd6c' }}"></i>
                            @endfor

                            <small class="text-muted">
                                {{ number_format($avg,1) }} ({{ $count }})
                            </small>

                        </div>

                        {{-- BUTTON --}}
                        <div class="d-flex flex-wrap gap-3">

                            {{-- BELI --}}
                            <a href="{{ url('/pembayaran/create') }}/{{ $item->id }}"
                               class="btn btn-buy">

                                <i class="fas fa-bag-shopping me-2"></i>
                                Beli Sekarang

                            </a>

                            {{-- CUSTOM --}}
                            <a href="https://wa.me/6283195908268?text=Halo%20Admin%20MoodFit,%20saya%20ingin%20custom%20produk%20{{ urlencode($item->nama_produk) }}"
                               target="_blank"
                               class="btn btn-custom">

                                <i class="fas fa-pen-ruler me-2"></i>
                                Custom Design

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="empty-box">

                <i class="fas fa-box-open fa-5x mb-4"></i>

                <h2 class="empty-title mb-3">
                    Produk Belum Tersedia
                </h2>

                <p class="text-muted">
                    Koleksi terbaru MoodFit akan segera hadir.
                </p>

            </div>
        </div>

        @endforelse

    </div>

</div>

@endsection