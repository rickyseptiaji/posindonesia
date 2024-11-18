<section id="hero" class="hero section dark-background">

    <img src="{{ asset('assets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">

    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Mitra Pengiriman Anda Dengan Secepat Kilat </h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    PosIND sebagai penggerak roda perekonomian Indonesia serta menunjang perdagangan global
                    melalui ekosistem layanan yang terintegrasi dengan beragam bidang industri</p>

                <form action="{{ url('/track') }}" method="GET" class="form-search d-flex align-items-stretch mb-3"
                    data-aos="fade-up" data-aos-delay="200">
                    <input type="text" name="awb" class="form-control" placeholder="Masukan Nomor Resi Anda">
                    <button type="submit" class="btn btn-primary">Cek Resi</button>
                </form>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

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

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('assets/img/animation-hero.png') }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- /Hero Section -->
