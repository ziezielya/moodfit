<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container-fluid">

        <a class="navbar-brand" href="/">MOODFIT</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang') }}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk') }}">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                </li>

            </ul>

        </div>

        <a href="{{ url('/admin/login') }}" class="btn btn-login">
            Login Admin
        </a>

    </div>

</nav>