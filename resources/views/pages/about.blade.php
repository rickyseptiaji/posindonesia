@extends('index')

@section('title', 'Tentang Kami')


@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Tentang Kami</h1>
            <p> PT Pos Indonesia Persero berbisnis dengan nama dagang POS IND Logistik Indonesia, disingkat POS
                IND adalah sebuah badan usaha milik negara Indonesia yang terutama menyediakan layanan pos.
                Untuk mendukung kegiatan bisnisnya, hingga akhir tahun 2021, perusahaan ini memiliki 6 unit kantor
                regional, 42 unit kantor cabang utama, dan 168 unit kantor cabang yang tersebar di seantero
                Indonesia.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/img/pages-struktur-organisasi.webp') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=kpI5ES8VEX8" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>
                        PT Pos Indonesia Persero berbisnis dengan nama dagang POS IND Logistik Indonesia, disingkat POS
                        IND adalah sebuah badan usaha milik negara Indonesia yang terutama menyediakan layanan pos.
                        Untuk mendukung kegiatan bisnisnya, hingga akhir tahun 2021, perusahaan ini memiliki 6 unit kantor
                        regional, 42 unit kantor cabang utama, dan 168 unit kantor cabang yang tersebar di seantero
                        Indonesia.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>VISI</h5>
                                <p>Membangun bangsa yang lebih berdaya saing dan sejahtera
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>MISI</h5>
                                <p>Menjadi Postal Operator, Penyedia Jasa Kurir, Logistik dan Keuangan Paling Kompetitif.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>TUJUAN</h5>
                                <p>Bertindak Efektif Untuk Mencapai Performance Terbaik</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                            class="purecounter">100</span>
                        <p>Negara</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="2"
                            class="purecounter">1000</span>
                        <p>Pengiriman</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="4000" data-purecounter-duration="3"
                            class="purecounter">4000</span>
                        <p>Kantor</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="4"
                            class="purecounter">200</span>
                        <p>Agen POS</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Dewan Direksi<br></span>
            <h2>Dewan Direksi</h2>
            <p>PT Pos Indonesia (Persero)</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row">

                <div class="col d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/faizal-rochma.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Faizal Rochmad Djoemadi</h4>
                            <span>Direktur Utama</span>
                            <p>
                                Faizal Rochmad Djoemadi menjabat sebagai Direktur Utama PT Pos Indonesia (Persero)
                                berdasarkan Surat Keputusan Menteri Badan Usaha Milik Negara Selaku Rapat Umum Pemegang
                                Saham Perusahaan Perseroan (Persero) PT Pos Indonesia Nomor : SK-301/MBU/09/2020, tanggal 23
                                September 2020 tentang Pemberhentian, Perubahan Nomenklatur Jabatan, Pengalihan Tugas, dan
                                Pengangkatan Anggota-Anggota Direksi Perusahaan Perseroan (Persero) PT Pos Indonesia.
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Endy-Pattia-Rahmadi-Abdurrahman.webp') }}" class="img-fluid"
                            alt="">
                        <div class="member-content">
                            <h4>Endy Pattia Rahmadi Abdurrahman</h4>
                            <span>Direktur Keuangan dan Manajemen Risiko</span>
                            <p>
                                Diangkat sebagai Direktur Keuangan PT. Pos Indonesia (Persero) berdasarkan Surat Keputusan
                                Menteri Badan Usaha Milik Negara Selaku Rapat Umum Pemegang Saham Perusahaan Perseroan
                                (Persero) PT Pos Indonesia Nomor : SK-301/MBU/09/2020, tanggal 23 September 2020 tentang
                                Pemberhentian, Perubahan Nomenklatur Jabatan, Pengalihan Tugas, dan Pengangkatan
                                Anggota-Anggota Direksi Perusahaan Perseroan (Persero) PT Pos Indonesia.
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Tonggo-Marbun.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Tonggo Marbun</h4>
                            <span>Direktur Bisnis Kurir dan Logistik</span>
                            <p>
                                Tonggo Marbun menjabat sebagai Direktur Bisnis Kurir dan Logistik PT Pos Indonesia (Persero)
                                berdasarkan Surat Keputusan Menteri Badan Usaha Milik Negara Selaku Rapat Umum Pemegang
                                Saham Perusahaan Perseroan (Persero) PT Pos Indonesia Nomor : SK-260/MBU/09/2023, tanggal 21
                                September 20223 tentang Pemberhentian, Perubahan Nomenklatur Jabatan, Pengalihan Tugas, dan
                                Pengangkatan Anggota-Anggota Direksi Perusahaan Perseroan (Persero) PT Pos Indonesia.
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Hariadi.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Hariadi</h4>
                            <span>Direktur Operasi dan Digital Services</span>
                            <p>
                                Hariadi menjabat sebagai Direktur Operasi dan Digital Services berdasarkan Surat Keputusan
                                Menteri Badan Usaha Milik Negara Selaku Rapat Umum Pemegang Saham Perusahaan Perseroan
                                (Persero) PT Pos Indonesia Nomor : SK-230/MBU/10/2022, tanggal 19 Oktober 2022 tentang
                                Pemberhentian, Perubahan Nomenklatur Jabatan, Pengalihan Tugas, dan Pengangkatan
                                Anggota-Anggota Direksi Perusahaan Perseroan (Persero) PT Pos Indonesia
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Haris.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Haris</h4>
                            <span>Direktur Bisnis Jasa Keuangan</span>
                            <p>
                                Pria kelahiran Medan, 21 November 1967 ini diangkat sebagai Direktur Bisnis Jasa Keuangan
                                berdasarkan Surat Keputusan Menteri Badan Usaha Milik Negara Selaku Rapat Umum Pemegang
                                Saham Perusahaan Perseroan (Persero) PT Pos Indonesia Nomor: SK-230/MBU/10/2022 tanggal 19
                                Oktober 2022 tentang Pemberhentian, Perubahan Nomenklatur Jabatan, Pengalihan Tugas, dan
                                Pengangkatan Anggota-Anggota Direksi Perusahaan Perseroan PT Pos Indonesia (Persero).
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Asih-Kurniasari.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Asih Kurniasari Komar</h4>
                            <span>Direktur Human Capital Management</span>
                            <p>
                                Lahir di Sukabumi tanggal 29 Januari 1970, Asih Kurniasari Komar menjabat sebagai Direktur
                                Human Capital Management PT Pos Indonesia (Persero) berdasarkan Surat Keputusan Menteri
                                Badan Usaha Milik Negara Selaku Rapat Umum Pemegang Saham Perusahaan Perseroan (Persero) PT
                                Pos Indonesia Nomor : SK-260/MBU/09/2023 tanggal 21 September 2023 tentang Pemberhentian,
                                Pengalihan Tugas, dan Pengangkatan Anggota-Anggota Direksi Perusahaan Perseroan (Persero) PT
                                Pos Indonesia.
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/Prasabri-Pesti.webp') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Prasabri Pesti</h4>
                            <span>Direktur Business Development dan Portfolio Management</span>
                            <p>
                                Pria kelahiran Lampung, 11 September 1971 ini diangkat sebagai Direktur Business Development
                                dan Portfolio Management berdasarkan Surat Keputusan Menteri Badan Usaha Milik Negara Selaku
                                Rapat Umum Pemegang Saham Perusahaan Perseroan (Persero) PT Pos Indonesia Nomor :
                                SK-230/MBU/10/2022, tanggal 19 Oktober 2022 tentang Pemberhentian, Perubahan Nomenklatur
                                Jabatan, Pengalihan Tugas, dan Pengangkatan Anggota-Anggota Direksi Perusahaan Perseroan
                                (Persero) PT Pos Indonesia.
                            </p>

                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->







@endsection
