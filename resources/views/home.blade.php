@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    <!-- Kabupaten Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card kabupaten-card">
                            <div class="card-body">
                                <h5 class="card-title">Kabupaten</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalKabupaten }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Kabupaten Card -->

                    <!-- Kecamatan Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card kecamatan-card">
                            <div class="card-body">
                                <h5 class="card-title">Kecamatan</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalKecamatan }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Kecamatan Card -->

                    <!-- Desa Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card desa-card">
                            <div class="card-body">
                                <h5 class="card-title">Desa</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalDesa }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Desa Card -->

                    <!-- Rekap Data Card -->
                    <div class="col-xxl-3 col-xl-12">
                        <div class="card info-card data-card">
                            <div class="card-body">
                                <h5 class="card-title">Rekap Data</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-file-pdf"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Rekap Data Card -->

                </div>
            </div>

        </div>
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            {{-- <h1>Welcome to the Dashboard</h1>
                            <p>This is the main page where you can access all parts of the system.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
