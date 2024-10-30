@extends('layouts.app')

@section('title', 'Daftar Kecamatan')

@section('content')
    <div class="container mt-3">
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
@endsection
