@extends('layouts.app')

@section('title', 'Rekap Data Survey')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Table Rekap Data -->
                        <div class="container mt-4">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pemilik</th>
                                        <th>Luas Kebun</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemilikKebuns as $pemilik)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $pemilik->nama }}</td>
                                            <td>{{ $pemilik->luas_kebun }}</td>
                                            <td>{{ $pemilik->lokasi }}</td>
                                            <td>
                                                <a href="{{ route('rekap-data.cetak', $pemilik->id) }}"
                                                    class="badge bg-success" target="_blank">
                                                    <i class="bi bi-printer"></i> Print
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
