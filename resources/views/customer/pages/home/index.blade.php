@extends('customer.layouts.app')

@section('content')

<section class="hero d-flex align-items-center text-center text-white"
style="
height:100vh;
background:
linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
url('https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=1974&auto=format&fit=crop');
background-size:cover;
">

    <div class="container">

        <h1 class="display-3 fw-bold">
            Fashion Modern <span style="color:#facc15;">MOODFIT</span>
        </h1>

        <p class="mt-4">
            Temukan style fashion terbaik dengan desain modern dan elegan.
        </p>

        <a href="/produk" class="btn btn-warning px-5 py-3 fw-bold mt-3">
            Belanja Sekarang
        </a>

    </div>

</section>

@endsection