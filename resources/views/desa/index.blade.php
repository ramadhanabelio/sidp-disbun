@extends('layouts.app')

@section('title', 'Daftar Desa')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger mt-4">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="container mt-4">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($desas as $desa)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $desa->name }}</td>
                                            <td>{{ $desa->kecamatan->name }}</td>
                                            <td>
                                                <a href="{{ route('desa.edit', $desa->id) }}" class="badge bg-warning">
                                                    <i class="bi bi-pencil me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('desa.destroy', $desa->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger border-0"
                                                        onclick="return confirm('Yakin ingin menghapus desa ini?')">
                                                        <i class="bi bi-trash me-1"></i> Hapus
                                                    </button>
                                                </form>
                                                <form action="{{ route('desa.create-user', $desa->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="badge bg-success border-0">
                                                        <i class="bi bi-person-fill-add"></i> Buat Akun Desa
                                                    </button>
                                                </form>
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
