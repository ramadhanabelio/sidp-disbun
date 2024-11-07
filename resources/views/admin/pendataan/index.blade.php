@extends('admin.layouts.app')

@section('title', 'Pendataan')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">

                            <div class="container text-center">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Bengkalis" class="mb-3"
                                    width="6%">
                                <h6 class="fw-bold">Form Pendataan</h6>
                                <h6 class="fw-bold">Survey Perkebunan Rakyat</h6>
                                <h6 class="fw-bold mb-4">Tahun 2024</h6>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Bordered Tabs Justified -->
                            <ul class="nav nav-tabs nav-tabs-bordered d-flex mb-3" id="borderedTabJustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="pemilik-kebun-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-home" aria-controls="bordered-justified-home"
                                        aria-selected="true">Keterangan Pemilik Kebun</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="kebun-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-profile"
                                        aria-controls="bordered-justified-profile" aria-selected="false">Keterangan
                                        Kebun</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="pendukung-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-contact"
                                        aria-controls="bordered-justified-contact" aria-selected="false">Keterangan
                                        Pendukung</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                @include('admin.tabs.tab-pemilik-kebun')
                                @include('admin.tabs.tab-kebun')
                                @include('admin.tabs.tab-pendukung')
                            </div>
                            <!-- End Bordered Tabs Justified -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if (session('status') === 'success')
                var kebunTab = new bootstrap.Tab(document.getElementById('kebun-tab'));
                kebunTab.show();
            @endif
        });

        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                $('#pemilikKebunTab').removeClass('active');
                $('#kebunTab').addClass('active');
                $('#pemilikKebun').removeClass('show active');
                $('#kebun').addClass('show active');
            @endif
        });

        function updateDesa() {
            const kecamatanId = document.getElementById('kecamatan').value;
            const desaSelect = document.getElementById('desa_kelurahan');

            desaSelect.innerHTML = '<option value="">Pilih Desa</option>';

            if (kecamatanId) {
                const desas = @json($desas);
                const filteredDesas = desas.filter(desa => desa.kecamatan_id == kecamatanId);

                filteredDesas.forEach(desa => {
                    const option = document.createElement('option');
                    option.value = desa.id;
                    option.textContent = desa.name;
                    desaSelect.appendChild(option);
                });
            }
        }
    </script>
@endsection
