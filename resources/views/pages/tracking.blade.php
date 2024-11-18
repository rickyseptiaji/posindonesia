@extends('index')

@section('title', 'Cek Resi')

@section('style')

@endsection
@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>CEK RESI</h1>
            <p>Nomor Resi itu bisa didapatkan apabila Anda sudah transaksi dengan pihak jasa pengiriman paket/barang
                mengenai paket yang hendak Anda kirim dan disampaikan pada penerima.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">CEK RESI</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="about" class="about section">

        <div class="container">

            <div class="row flex gy-4">
                <div class="col-12 " data-aos="fade-up" data-aos-delay="200">
                    <form action="{{ url('/track') }}" method="GET" class="form-search d-flex space-y-2 mb-3"
                        data-aos="fade-up" data-aos-delay="200">
                        <input type="text" name="awb" class="form-control" placeholder="Masukan Nomor Resi Anda">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Cek Resi</button>
                        </div>
                    </form>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-delay="200">

                    <h1 class="text-center">Hasil Pencarian</h1>
                    <div id="stepper" class="bs-stepper">
                        <!-- Content -->
                        <div class="bs-stepper-content">
                            <!-- Step 1 Content -->
                            <div id="summary-part" class="content" role="tabpanel" aria-labelledby="summary-part-trigger">
                                @if (isset($data))
                                    <h2>Summary</h2>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Status:
                                                {{ $data['data']['summary']['status'] }}</h5>
                                            <p class="card-text">Courier:
                                                {{ $data['data']['summary']['courier'] }}
                                            </p>
                                            <p class="card-text">AWB: {{ $data['data']['summary']['awb'] }}</p>
                                            <p class="card-text">Service: {{ $data['data']['summary']['service'] }}
                                            </p>
                                            <p class="card-text">Date: {{ $data['data']['summary']['date'] }}</p>
                                        </div>
                                    </div>
                                @else
                                    <h6 class="text-center mt-4">Tidak Ada Pencarian</h6>
                                @endif
                            </div>

                            <!-- Step 2 Content -->
                            <div id="details-part" class="content" role="tabpanel" aria-labelledby="details-part-trigger">
                                @if (isset($data))
                                    <h2>Details</h2>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <p class="card-text">Address: {{ $data['data']['detail']['origin'] }}</p>
                                            <p class="card-text">Destination: {{ $data['data']['detail']['destination'] }}
                                            </p>
                                            <p class="card-text">Shipper: {{ $data['data']['detail']['shipper'] }}</p>
                                            <p class="card-text">Receiver: {{ $data['data']['detail']['receiver'] }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Step 3 Content -->
                            <div id="history-part" class="content" role="tabpanel" aria-labelledby="history-part-trigger">
                                @if (isset($data))
                                    <h2>Tracking History</h2>
                                    <ul class="list-group">
                                        @foreach ($data['data']['history'] as $history)
                                            <li class="list-group-item">
                                                <p><strong>Date:</strong> {{ $history['date'] }}</p>
                                                <p><strong> -- </strong> {{ $history['desc'] }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if (isset($error))
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $error }}
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        </div>

        </div>

    </section><!-- /About Section -->

@endsection


@section('script')
    <script>
        $(document).ready(function() {
            var stepper = new Stepper(document.getElementById('stepper'), {
                linear: false,
                animation: true
            });

            // Optional: Automatically move to next step after 3 seconds
            setTimeout(function() {
                stepper.next();
            }, 3000);
        });
    </script>
@endsection
