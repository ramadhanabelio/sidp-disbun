@extends('layouts.app')

@section('title', 'Daftar Desa')

@section('content')
    <div class="container mt-3">
        {{-- <h1>Daftar Desa</h1> --}}
        <table class="table datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Desa</th>
                    <th>Kecamatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($desas as $desa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $desa->name }}</td>
                        <td>{{ $desa->kecamatan->name }}</td>
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
