@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    <!-- Rakyat Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card desa-card">
                            <div class="card-body">
                                <h5 class="card-title">Rakyat</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalPemilikKebun }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Rakyat Card -->

                </div>
            </div>

        </div>
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    {{-- <div class="card-body">
                        <div class="container mt-4"> --}}
                    {{-- <h1>Welcome to the Admin Dashboard</h1>
                            <p>Nama Admin: {{ Auth::user()->name }}</p>
                            <p>This is the dashboard for admins.</p> --}}
                    {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
