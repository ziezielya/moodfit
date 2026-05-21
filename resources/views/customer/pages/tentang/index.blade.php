@extends('customer.layouts.app')

@section('title', 'Tentang')

@section('content')

<style>
    body{
        background: linear-gradient(to bottom, #dccfa7, #382f0d);
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }

    .about-wrapper{
        padding: 20px;
    }

    /* HERO */
    .hero-about{
        background: linear-gradient(135deg, #fff9df, #ffe9a8);
        border-radius: 30px;
        padding: 80px 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(212, 175, 55, 0.15);
        border: 1px solid rgba(255,255,255,0.7);
    }

    .hero-about::before{
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.35);
        border-radius: 50%;
        top: -120px;
        right: -100px;
    }

    .hero-about::after{
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        background: rgba(255,255,255,0.25);
        border-radius: 50%;
        bottom: -90px;
        left: -80px;
    }

    .hero-about h1{
        font-size: 65px;
        font-weight: 800;
        color: #7d5b20;
        letter-spacing: 3px;
        position: relative;
        z-index: 2;
    }

    .hero-about .tagline{
        font-size: 20px;
        color: #8d6b2f;
        margin-top: 10px;
        position: relative;
        z-index: 2;
    }

    /* CARD */
    .luxury-card{
        background: rgba(220, 182, 100, 0.7);
        backdrop-filter: blur(12px);
        border-radius: 28px;
        padding: 35px;
        border: 1px solid rgba(255,255,255,0.8);
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        transition: 0.3s ease;
    }

    .luxury-card:hover{
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    }

    .luxury-card h3,
    .luxury-card h4{
        color: #7a5b1d;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .luxury-card p,
    .luxury-card li{
        color: #555;
        line-height: 1.9;
        font-size: 15px;
    }

    .luxury-card ul{
        padding-left: 18px;
    }

    /* DESIGNER */
    .designer-section{
        margin-top: 60px;
    }

    .designer-title{
        font-size: 35px;
        font-weight: 700;
        color: #7a5b1d;
        margin-bottom: 40px;
    }

    .designer-card{
        background: linear-gradient(145deg, #fffdf4, #fff2bc);
        padding: 45px 30px;
        border-radius: 35px;
        max-width: 700px;
        margin: auto;
        box-shadow: 0 18px 45px rgba(0,0,0,0.08);
        position: relative;
        overflow: hidden;
    }

    .designer-card::before{
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,0.35);
        border-radius: 50%;
        top: -70px;
        right: -50px;
    }

    .designer-img{
        width: 240px;
        height: 240px;
        object-fit: cover;
        border-radius: 50%;
        border: 8px solid rgba(255,255,255,0.8);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        position: relative;
        z-index: 2;
    }

    .designer-card h5{
        font-size: 28px;
        font-weight: 700;
        color: #6f5319;
        margin-top: 18px;
    }

    .designer-role{
        color: #9a7a32;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .designer-desc{
        max-width: 550px;
        margin: auto;
        line-height: 1.9;
        color: #555;
        font-size: 15px;
    }

    /* SECTION HEADER */
    .section-header h1{
        font-weight: 700;
        color: #7a5b1d;
    }

    @media(max-width:768px){

        .hero-about{
            padding: 60px 20px;
        }

        .hero-about h1{
            font-size: 42px;
        }

        .hero-about .tagline{
            font-size: 16px;
        }

        .designer-img{
            width: 180px;
            height: 180px;
        }
    }
</style>

<div class="section about-wrapper">

    <div class="section-header">
        <h1>Halaman Tentang</h1>
    </div>

    <div class="container py-4">

        <!-- HERO -->
        <div class="hero-about text-center mb-5">
            <h1>MOODFIT</h1>
            <p class="tagline">Temukan gaya sesuai mood kamu ✨</p>
        </div>

        <!-- ABOUT -->
        <div class="luxury-card mb-5">
            <h3>Tentang Kami</h3>

            <p>
                MOODFIT adalah platform fashion yang membantu kamu menemukan outfit sesuai
                dengan suasana hati (mood). Kami percaya bahwa setiap orang memiliki gaya unik
                yang dapat berubah sesuai perasaan, aktivitas, dan momen spesial.
            </p>

            <p>
                Dengan perpaduan fashion modern dan sentuhan budaya elegan,
                MOODFIT menghadirkan pilihan outfit mulai dari vintage, formal,
                casual hingga classy style yang mampu meningkatkan rasa percaya diri.
            </p>
        </div>

        <!-- VISI MISI -->
        <div class="row g-4 mb-5">

            <div class="col-md-6">
                <div class="luxury-card h-100">
                    <h4>Visi</h4>

                    <p>
                        Menjadi platform fashion terbaik yang membantu setiap individu
                        mengekspresikan dirinya melalui gaya berpakaian yang elegan,
                        modern, dan penuh karakter.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="luxury-card h-100">
                    <h4>Misi</h4>

                    <ul>
                        <li>Menyediakan outfit sesuai mood dan personality</li>
                        <li>Mengikuti perkembangan tren fashion modern</li>
                        <li>Meningkatkan rasa percaya diri pengguna</li>
                        <li>Menghadirkan tampilan fashion yang elegan & stylish</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- DESIGNER -->
        <div class="designer-section text-center">

            <h3 class="designer-title">Our Designer</h3>

            <div class="designer-card">

                <img src="/img/download (9).jpg" class="designer-img mb-3">

                <h5>Nadya Ziezielya</h5>

                <p class="designer-role">
                    Fashion Designer & Founder
                </p>

                <p class="designer-desc">
                    Seorang desainer muda dengan passion dalam dunia fashion modern
                    berpadu sentuhan budaya yang elegan. Fokus pada menciptakan outfit
                    yang tidak hanya stylish, tetapi juga memiliki makna, karakter,
                    dan mampu mencerminkan mood serta kepribadian penggunanya.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection