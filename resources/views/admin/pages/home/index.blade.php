@extends('admin.layouts.app')

@section('title', 'beranda')

@section('content')

    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0f0f0f;
            color: #fff;
        }

        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: gold;
            letter-spacing: 2px;
        }

        .menu a {
            margin-left: 30px;
            text-decoration: none;
            color: #ddd;
            transition: 0.3s;
        }

        .menu a:hover {
            color: gold;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1521335629791-ce4aec67dd47') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 60px;
            letter-spacing: 3px;
        }

        .hero p {
            margin: 20px 0;
            color: #ccc;
        }

        .btn {
            padding: 12px 30px;
            background: gold;
            color: black;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: white;
        }

        /* Section */
        .section {
            padding: 80px;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: gold;
        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }


        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-body h3 {
            margin-bottom: 10px;
        }

        .card-body p {
            color: #aaa;
        }

    </style>
</head>
<body>


    <!-- Hero -->
    <div class="hero">
        <div class="hero-content">
            <h1>Fashion Designer</h1>
            <p>Elegance is not standing out, but being remembered</p>
            <a href="produk" class="btn">Explore Now</a>
        </div>
    </div>

    <!-- Section -->
    <div class="section">
        <h2>Our Collection</h2>
        <p>Exclusive and premium fashion style</p>

        <div class="cards">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d">
                <div class="card-body">
                    <h3>Modern Style</h3>
                    <p>Clean and elegant fashion design</p>
                </div>
            </div>

            <div class="card">
                <img src="/img/c look.jpg">
                <div class="card-body">
                    <h3>Classic Look</h3>
                    <p>Timeless outfit</p>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae">
                <div class="card-body">
                    <h3>Exclusive</h3>
                    <p>High-end premium collection</p>
                </div>
            </div>
        </div>
    </div>

</body>

@endsection