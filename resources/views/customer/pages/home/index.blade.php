@extends('customer.layouts.app')

@section('content')

<style>
    .hero-luxury{
        position: relative;
        min-height: 100vh;
        background:
        linear-gradient(to right, rgba(5,10,30,0.92), rgba(0,0,0,0.55)),
        url('https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=1974&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .hero-luxury::before{
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        background: rgba(250, 204, 21, 0.08);
        border-radius: 50%;
        top: -200px;
        right: -150px;
        filter: blur(20px);
    }

    .hero-luxury::after{
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(250, 204, 21, 0.06);
        border-radius: 50%;
        bottom: -150px;
        left: -100px;
        filter: blur(20px);
    }

    .hero-content{
        position: relative;
        z-index: 2;
        padding-top: 120px;
    }

    .hero-badge{
        display: inline-block;
        padding: 10px 22px;
        border: 1px solid rgba(255,255,255,0.2);
        background: rgba(255,255,255,0.08);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        font-size: 14px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 25px;
        color: #facc15;
    }

    .hero-title{
        font-size: 78px;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 25px;
        color: #fff;
    }

    .hero-title span{
        color: #facc15;
        text-shadow: 0 0 20px rgba(250,204,21,0.4);
    }

    .hero-text{
        max-width: 700px;
        margin: auto;
        font-size: 20px;
        color: rgba(255,255,255,0.82);
        line-height: 1.8;
    }

    .hero-btn{
        margin-top: 40px;
        padding: 18px 50px;
        background: linear-gradient(135deg, #facc15, #eab308);
        color: #111827;
        font-size: 18px;
        font-weight: 700;
        border-radius: 60px;
        text-decoration: none;
        display: inline-block;
        transition: 0.4s ease;
        box-shadow: 0 15px 35px rgba(250,204,21,0.35);
    }

    .hero-btn:hover{
        transform: translateY(-5px) scale(1.03);
        color: #000;
        box-shadow: 0 20px 45px rgba(250,204,21,0.5);
    }

    .hero-bottom{
        margin-top: 70px;
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .hero-card{
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.12);
        backdrop-filter: blur(14px);
        border-radius: 20px;
        padding: 25px 35px;
        min-width: 220px;
        transition: 0.4s;
    }

    .hero-card:hover{
        transform: translateY(-8px);
        background: rgba(255,255,255,0.12);
    }

    .hero-card h3{
        color: #facc15;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .hero-card p{
        color: rgba(255,255,255,0.75);
        margin: 0;
    }

    @media(max-width:768px){

        .hero-title{
            font-size: 46px;
        }

        .hero-text{
            font-size: 16px;
        }

        .hero-card{
            width: 100%;
        }
    }
</style>

<section class="hero-luxury d-flex align-items-center text-center">

    <div class="container hero-content">

        <div class="hero-badge">
            Premium Fashion Brand
        </div>

        <h1 class="hero-title">
            Elevate Your Style <br>
            with <span>MOODFIT</span>
        </h1>

        <p class="hero-text">
            Hadirkan gaya modern, elegan, dan eksklusif untuk setiap penampilanmu.
            Koleksi fashion premium dengan desain berkelas dan kualitas terbaik.
        </p>

        <a href="/produk" class="hero-btn">
            Explore Collection
        </a>

        <div class="hero-bottom">

            <div class="hero-card">
                <h3>100+</h3>
                <p>Exclusive Products</p>
            </div>

            <div class="hero-card">
                <h3>4.9★</h3>
                <p>Customer Rating</p>
            </div>

            <div class="hero-card">
                <h3>Premium</h3>
                <p>Modern Fashion Style</p>
            </div>

        </div>

    </div>

</section>

@endsection