@extends('index')

@section('title', 'Produk Kami')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Produk Kami</h1>
            <p>Pos Indonesia juga memiliki berbagai produk lain seperti prangko, kartu pos, dan layanan berkaitan dengan
                komunikasi dan logistik</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Produk Kami</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Jasa Pengiriman <br></span>
            <h2>Jasa Pengiriman</h2>

        </div><!-- End Section Title -->


        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pos-sameday.webp') }}" alt="" class="img-fluid">
                        </div>
                        <h3>POS SAMEDAY</h3>
                        <p>Pengiriman dan penerimaan paket dilakukan dihari yang sama, Maksimal 9 Jam Sampai (Sameday
                            Service), Kiriman di Kota yang sama (City Courier), Maksimal berat paket 10 Kg</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pos-reguler.webp') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">POS REGULER</a></h3>
                        <p>H+2 s.d H+4 Sampai, Antar Kota dan Kabupaten, Tersedia di Aplikasi PosAja!, Maksimal berat paket
                            50 Kg, Free Pick Up Paket, Bisa COD (Cash On Delivery)</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pos-ekonomi.webp') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">POS EKONOMI</a></h3>
                        <p>Layanan Pos Universal (LPU) berupa pengiriman surat/dokumen biasa, kartupos, sekogram, dan paket
                            pos biasa dengan standar waktu penyerahan point to point dalam jaringan nasional</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pos-nextday.webp') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">POS NEXTDAY</a></h3>
                        <p>H+1 Next Day, Antar Kota Provinsi, Tersedia di Aplikasi PosAja!, Maksimal berat paket 30 Kg,Free
                            Pick Up Paket COD Cash On Delivery</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pos-jumbo.webp') }}" alt="" class="img-fluid">
                        </div>
                        <h3>POS JUMBO</h3>
                        <p>Layanan Pengiriman paket/barang non standar dengan standar waktu penyerahan point to point dalam
                            jaringan nasional</p>
                    </div>
                </div><!-- End Card Item -->
                {{--
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/service-6.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Warehousing</a></h3>
                        <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi
                            quisquam aut nostrum unde et qui est non quo nulla</p>
                    </div>
                </div><!-- End Card Item --> --}}

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>layanan dan produk</span>
            <h2>layanan dan produk</h2>
            <p>Produk dan layanan ini mendukung kebutuhan pengiriman dan komunikasi baik untuk individu maupun bisnis di
                Indonesia.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Pengiriman Paket dan Dokumen</h3>
                    <p class="fst-italic">
                        Layanan pengiriman domestik dan internasional.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span>Pos Indonesia memiliki jaringan kantor pos
                                yang luas di seluruh Indonesia, termasuk di daerah terpencil, sehingga memudahkan pengiriman
                                ke berbagai lokasi.</span></li>
                        <li><i class="bi bi-check"></i> <span>Pos Indonesia memiliki jaringan kantor pos
                                yang luas di seluruh Indonesia, termasuk di daerah terpencil, sehingga memudahkan pengiriman
                                ke berbagai lokasi.</span></li>

                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Pos Kilat Khusus</h3>
                    <p class="fst-italic">
                        Layanan ini merupakan solusi untuk pengiriman cepat dalam negeri dengan waktu pengiriman yang lebih
                        singkat dibanding layanan reguler.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span>Menawarkan waktu pengiriman yang lebih cepat daripada layanan
                                reguler, cocok untuk pengiriman dengan waktu tertentu yang ketat.</span></li>
                        <li><i class="bi bi-check"></i> <span>Memberikan prioritas dalam proses pengiriman dan penanganan
                                paket.
                                Memberikan prioritas dalam proses pengiriman dan penanganan paket.
                            </span></li>

                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Kurir</h3>
                    <p>Layanan kurir Pos Indonesia adalah solusi untuk pengiriman paket secara langsung ke alamat tujuan,
                        sering kali dengan opsi pelacakan.

                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Paket dikirimkan langsung ke alamat yang dituju, memberikan
                                kemudahan bagi pengirim dan penerima..</span></li>

                        <li><i class="bi bi-check"></i> <span>Umumnya dilengkapi dengan layanan pelacakan untuk memantau
                                status pengiriman secara real-time.</span>.</li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Pos Ekspres</h3>
                    <p class="fst-italic">
                        Layanan ini menyediakan pengiriman dokumen dan paket dengan prioritas tinggi, dengan fokus pada
                        kecepatan dan keamanan.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Memberikan prioritas dalam penanganan dan pengiriman paket,
                                cocok untuk kebutuhan yang memerlukan pengiriman segera.</span></li>

                        <li><i class="bi bi-check"></i> <span>Menjamin keamanan dokumen dan paket yang dikirimkan.</span>.
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Features Section -->
@endsection
