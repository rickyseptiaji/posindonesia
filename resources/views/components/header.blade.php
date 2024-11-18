<header id="header" class="header d-flex align-items-center fixed-top  ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/dark-logo.webp') }}" alt="" height="100px" width="50px">
            {{-- <h1 class="sitename">Logis</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>

                <li><a href="/tentangkami">Tentang Kami</a></li>
                <li><a href="/produk">Produk Kami</a></li>
                <li><a href="/media">Media & Informasi</a></li>
                <li><a href="/hubungikami">Hubungi Kami</a></li>


            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ route('cekresi') }}">CEK RESI</a>

    </div>
</header>
