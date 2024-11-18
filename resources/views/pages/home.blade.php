@extends('index')

@section('title', 'Pos Indonesia')

@section('content')

    <!-- Hero Section -->
    @include('components.hero')

    <!-- Featured Services Section -->
    @include('components.featured-service')

    <!-- About Section -->
    @include('components.about')

    <!-- Services Section -->
    @include('components.services')

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>CEK RESI</h3>
                        <p>Nomor Resi itu bisa didapatkan apabila Anda sudah transaksi dengan pihak jasa pengiriman
                            paket/barang mengenai paket yang hendak Anda kirim dan disampaikan pada penerima.</p>
                        <a class="cta-btn" href="{{ route('cekresi') }}">CEK RESI</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    {{-- @include('components.features') --}}


    <!-- Testimonials Section -->
    @include('components.testimonial')

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Orang Pernah Bertanya</span>
            <h2>ORANG PERNAH BERTANYA</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apa yang dimaksud dengan Pos Indonesia?
                            </h3>
                            <div class="faq-content">
                                <p>PT Pos Indonesia (Persero) merupakan perusahaan BUMN yang bergerak dibidang jasa
                                    pengiriman surat maupun barang yang memiliki kantor pusat di Kota Bandung dan memiliki
                                    11 kantor regional yang tersebar di seluruh wilayah Indonesia.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>PT Pos Indonesia bergerak dalam bidang apa?</h3>
                            <div class="faq-content">
                                <p>PT Pos Indonesia (Persero) berhasil menunjukan pertumbuhan kinerja yang baik dari tahun
                                    ke tahun. Tercatat pada 2013, BUMN ini mampu meraih revenue konsolidasi sebesar Rp.4,2
                                    triliun dengan laba yang mencapai Rp.301 miliar.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Pos Indonesia mengirim apa?</h3>
                            <div class="faq-content">
                                <p>Pos Indonesia menyediakan berbagai jenis layanan, termasuk pengiriman surat, paket,
                                    dokumen, dan barang, pengiriman uang, pembayaran tagihan, pengiriman dokumen perbankan,
                                    dan layanan keamanan. Selain itu, Pos Indonesia juga menawarkan layanan logistik yang
                                    mencakup penyimpanan, pengiriman, dan penanganan barang.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Cara melacak paket dari pos sudah sampai dimana?</h3>
                            <div class="faq-content">
                                <p>1. Pertama, buka situs resmi Pos Indonesia di www.posindonesia.com<br>
                                    2. Setelah itu, cari menu "CEK RESI" yang terletak di bagian atas halaman situs.<br>
                                    3. Masukkan nomor resi atau barcode yang tertera pada bukti pengiriman Anda.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Nomor resi paket pos yang mana?</h3>
                            <div class="faq-content">
                                <p>Contoh nomor resi pos biasanya terletak pada bagian kanan atas. Biasanya akan tertulis
                                    sebagai nomor kiriman atau nomor barcode. Dari situ, akan terlihat data pengiriman pos
                                    yang dilakukan.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
