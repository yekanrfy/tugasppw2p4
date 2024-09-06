<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img id="logo-img" src="{{ asset('img/logo.png') }}" alt="Logo" height="90" width="200" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex justify-content-center justify-content-sm-end" role="search">
            <div class="input-group">
                <input class="form-control me-2 me-sm-4" type="search" aria-label="Search" style="font-family: 'inherit'; font-size: inherit" />
                <button class="btn btn-brand" type="submit" style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-radius: 5px; padding: 10px 24px">Cari</button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#hero" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link">Ulasan</a>
                </li>
            </ul>
            <a href="{{ url('/akun') }}" class="btn btn-brand ms-lg-3">Akun Saya</a>
        </div>
    </div>
</nav>