@extends('index')

@section('title', 'Media & Informasi')

@section('content')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Media & Informsi</h1>
                <p>Gallery Pos Indonesia adalah sebuah tempat yang menampilkan berbagai produk dan layanan yang ditawarkan
                    oleh Pos Indonesia. </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Media & Informasi</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Pricing Section -->
        <section id="pricing" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Media & Informasi</span>
                <h2>Media & Informasi</h2>
                <p>Gallery Pos Indonesia adalah sebuah tempat yang menampilkan berbagai informasi dan layanan yang disajikan
                    oleh Pos Indonesia.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 d-flex mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ asset($gallery['image']) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $gallery['title'] }}</h5>
                                        <p class="card-text">{{ $gallery['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Alt Pricing Section -->


    @endsection
