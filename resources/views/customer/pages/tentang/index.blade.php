@extends('customer.layouts.app')

@section('title', 'tentang')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Halaman Tentang</h1>
    </div>

    
                <div class="container py-5">

    <!-- HERO -->
    <div class="hero-about text-center mb-5">
        <h1 class="fw-bold">MOODFIT</h1>
        <p class="tagline">Temukan gaya sesuai mood kamu ✨</p>
    </div>

    <!-- ABOUT -->
    <div class="card about-card p-4 mb-5">
        <h3 class="mb-3">Tentang Kami</h3>
        <p>
            MOODFIT adalah platform fashion yang membantu kamu menemukan outfit sesuai dengan suasana hati (mood).
            Kami percaya bahwa setiap orang memiliki gaya unik yang bisa berubah sesuai perasaan, aktivitas, dan momen.
        </p>
        <p>
            Dengan menggabungkan tren modern dan sentuhan budaya, MOODFIT menghadirkan pilihan outfit mulai dari
            vintage, formal, casual hingga stylish yang bisa meningkatkan rasa percaya diri kamu.
        </p>
    </div>

    <!-- VISI MISI -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card p-4 h-100">
                <h4>Visi</h4>
                <p>Menjadi platform fashion terbaik yang membantu setiap individu mengekspresikan dirinya melalui gaya berpakaian.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 h-100">
                <h4>Misi</h4>
                <ul>
                    <li>Menyediakan outfit sesuai mood</li>
                    <li>Mengikuti tren fashion modern</li>
                    <li>Meningkatkan kepercayaan diri pengguna</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- DESIGNER -->
    <div class="designer-section text-center">
        <h3 class="mb-4">Our Designer</h3>

        <div class="designer-card mx-auto">
            <img src="/img/download (9).jpg" class="designer-img mb-3"
                style="width:250px; height:auto; display:block; margin:auto;">
            <h5>Nadya Ziezielya</h5>
            <p class="text-muted">Fashion Designer & Founder</p>
                        <p style="max-width:550px; margin:25px auto; text-align:center; 
                    line-height:1.9; font-size:15px; color:#444;">
                Seorang desainer muda yang memiliki passion dalam dunia fashion modern dengan sentuhan budaya.
                Fokus pada menciptakan outfit yang tidak hanya stylish, tetapi juga memiliki makna dan karakter.
            </p>
        </div>
    </div>

</div>

@endsection