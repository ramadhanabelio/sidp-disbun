@extends('layouts.app')

@section('title', 'Daftar Kecamatan')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            {{-- <h1>Daftar Kecamatan</h1> --}}
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kecamatans as $kecamatan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kecamatan->name }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
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
