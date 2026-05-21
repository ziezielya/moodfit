@extends('customer.layouts.app')

@section('title', 'gallery')

@section('content')

<title>Fashion Week Gallery</title>

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #ffffff;
}

/* SECTION */
.gallery {
    padding: 40px 60px;
    text-align: center;
}

.gallery h2 {
    font-size: 26px;
    margin-bottom: 5px;
}

.gallery p {
    color: #777;
    margin-bottom: 30px;
    font-size: 14px;
}

/* GRID */
.gallery-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

/* CARD */
.card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-4px);
}

/* IMAGE */
.card img {
    width: 100%;
    height: 250px; /* kecil & rapi */
    object-fit: cover;
}

/* TEXT */
.card-content {
    padding: 12px;
}

.card-content h3 {
    font-size: 15px;
    margin: 0;
}

.card-content p {
    font-size: 12px;
    color: #666;
    margin-top: 5px;
}
</style>

</head>
<body>

<section class="gallery">
    <h2>Fashion Week Gallery</h2>
    <p>Koleksi momen terbaik dari berbagai fashion week </p>

    <div class="gallery-container">

        <div class="card">
            <img src="img/1.jpg">
            <div class="card-content">
                <h3>Nusantara Fashion Week</h3>
                <p>yang menampilkan koleksi kontemporer berbasis kekayaan alam dan kain etnik Indonesia.</p>
            </div>
        </div>

        <div class="card">
            <img src="img/2.jpg">
            <div class="card-content">
                <h3>Sophisticated</h3>
                <p>yang menonjolkan keanggunan, kemewahan yang elegan, namun tetap sederhana.</p>
            </div>
        </div>

        <div class="card">
            <img src="img/3.jpg">
            <div class="card-content">
                <h3>Ronakultura Jakarta</h3>
                <p>Tema ini menggambarkan semarak budaya Jakarta yang dinamis, penuh warna, dan menjadi titik temu antara tradisi dengan gaya hidup kontemporer.</p>
            </div>
        </div>

        <div class="card">
            <img src="img/4.jpg">
            <div class="card-content">
                <h3>Future Fusion: Tradition Meets Innovation</h3>
                <p>Fokusnya adalah memadukan wastra (kain tradisional) Nusantara dengan teknologi dan inovasi desain modern.</p>
            </div>
        </div>

    </div>
</section>

</body>

@endsection