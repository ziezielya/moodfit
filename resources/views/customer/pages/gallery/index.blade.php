@extends('customer.layouts.app')

@section('title', 'Fashion Gallery')

@section('content')

<style>

body{
    background: linear-gradient(to bottom, #dccfa7, #362b12);
    font-family: 'Poppins', sans-serif;
}

/* SECTION */
.gallery-section{
    padding: 110px 40px 70px;
    min-height: 100vh;
}

/* HEADER */
.gallery-header{
    text-align: center;
    margin-bottom: 50px;
}

.gallery-header h2{
    font-size: 42px;
    font-weight: 800;
    color: #7a5c00;
    margin-bottom: 12px;
    letter-spacing: 1px;
}

.gallery-header p{
    max-width: 700px;
    margin: auto;
    color: #8d7b52;
    font-size: 15px;
    line-height: 1.8;
}

/* GRID */
.gallery-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
    max-width: 1300px;
    margin: auto;
}

/* CARD */
.gallery-card{
    background: rgba(255,255,255,0.78);
    backdrop-filter: blur(10px);
    border-radius: 28px;
    overflow: hidden;
    border: 1px solid #f5e2ad;
    box-shadow: 0 10px 30px rgba(214, 180, 78, 0.12);
    transition: all 0.35s ease;
    position: relative;
}

.gallery-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(214, 180, 78, 0.18);
}

/* IMAGE */
.gallery-card img{
    width: 100%;
    height: 340px;
    object-fit: cover;
    transition: 0.4s;
}

.gallery-card:hover img{
    transform: scale(1.05);
}

/* CONTENT */
.gallery-content{
    padding: 24px;
    text-align: left;
}

.gallery-content h3{
    font-size: 18px;
    font-weight: 700;
    color: #7a5c00;
    margin-bottom: 10px;
    line-height: 1.4;
}

.gallery-content p{
    color: #7b7b7b;
    font-size: 13px;
    line-height: 1.8;
}

/* TAG */
.gallery-tag{
    position: absolute;
    top: 18px;
    left: 18px;
    background: rgba(255, 244, 204, 0.95);
    color: #8a6700;
    padding: 8px 14px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    backdrop-filter: blur(5px);
}

/* RESPONSIVE */
@media(max-width:768px){

    .gallery-section{
        padding: 100px 20px 50px;
    }

    .gallery-header h2{
        font-size: 32px;
    }

    .gallery-card img{
        height: 280px;
    }

}

</style>

<section class="gallery-section">

    <!-- HEADER -->
    <div class="gallery-header">

        <h2>Fashion Week Gallery</h2>

        <p>
            Koleksi eksklusif dari berbagai fashion week yang menampilkan 
            perpaduan kemewahan modern, budaya, dan estetika premium khas MoodFit.
        </p>

    </div>

    <!-- GRID -->
    <div class="gallery-container">

        <!-- CARD 1 -->
        <div class="gallery-card">

            <div class="gallery-tag">
                Fashion Week
            </div>

            <img src="{{ asset('img/1.jpg') }}" alt="Fashion">

            <div class="gallery-content">

                <h3>Nusantara Fashion Week</h3>

                <p>
                    Koleksi kontemporer yang memadukan kekayaan kain etnik 
                    Indonesia dengan sentuhan desain modern yang elegan.
                </p>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="gallery-card">

            <div class="gallery-tag">
                Elegant Style
            </div>

            <img src="{{ asset('img/2.jpg') }}" alt="Fashion">

            <div class="gallery-content">

                <h3>Sophisticated Elegance</h3>

                <p>
                    Menampilkan kemewahan minimalis dengan siluet modern 
                    yang memberikan kesan classy dan timeless.
                </p>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="gallery-card">

            <div class="gallery-tag">
                Cultural Runway
            </div>

            <img src="{{ asset('img/3.jpg') }}" alt="Fashion">

            <div class="gallery-content">

                <h3>Ronakultura Jakarta</h3>

                <p>
                    Semarak budaya Jakarta yang dinamis dipadukan 
                    dengan gaya urban kontemporer yang fashionable.
                </p>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="gallery-card">

            <div class="gallery-tag">
                Future Concept
            </div>

            <img src="{{ asset('img/4.jpg') }}" alt="Fashion">

            <div class="gallery-content">

                <h3>Future Fusion</h3>

                <p>
                    Perpaduan wastra Nusantara dengan inovasi desain modern 
                    untuk menghadirkan fashion masa depan yang artistik.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection