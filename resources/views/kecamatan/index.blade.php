@extends('layouts.app')

@section('title', 'Daftar Kecamatan')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Button Tambah Kecamatan -->
                        <button class="btn btn-primary mt-4 mb-1" data-bs-toggle="modal"
                            data-bs-target="#tambahKecamatanModal">
                            Tambah Kecamatan
                        </button>

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Modal Tambah Kecamatan -->
                        <div class="modal fade" id="tambahKecamatanModal" tabindex="-1"
                            aria-labelledby="tambahKecamatanModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahKecamatanModalLabel">Tambah Kecamatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('kecamatan.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama Kecamatan</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Table Kecamatan -->
                        <div class="container mt-4">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kecamatans as $kecamatan)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $kecamatan->name }}</td>
                                            <td>
                                                <a href="{{ route('kecamatan.edit', $kecamatan->id) }}"
                                                    class="badge bg-warning">
                                                    <i class="bi bi-pencil me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('kecamatan.destroy', $kecamatan->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger border-0"
                                                        onclick="return confirm('Yakin ingin menghapus kecamatan ini?')">
                                                        <i class="bi bi-trash me-1"></i> Hapus
                                                    </button>
                                                </form>
                                                <a class="badge bg-success" data-bs-toggle="modal"
                                                    data-bs-target="#tambahDesaModal-{{ $kecamatan->id }}">
                                                    <i class="bi bi-plus-circle me-1"></i> Tambah Desa
                                                </a>
                                                <a class="badge bg-info" data-bs-toggle="modal"
                                                    data-bs-target="#lihatDesaModal-{{ $kecamatan->id }}">
                                                    <i class="bi bi-eye me-1"></i> Lihat Desa
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal Tambah Desa -->
                                        <div class="modal fade" id="tambahDesaModal-{{ $kecamatan->id }}" tabindex="-1"
                                            aria-labelledby="tambahDesaModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="tambahDesaModalLabel">Tambah Desa di
                                                            {{ $kecamatan->name }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('desa.store', $kecamatan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama Desa</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Lihat Desa -->
                                        <div class="modal fade" id="lihatDesaModal-{{ $kecamatan->id }}" tabindex="-1"
                                            aria-labelledby="lihatDesaModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="lihatDesaModalLabel">Daftar Desa di
                                                            {{ $kecamatan->name }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="list-group">
                                                            @forelse ($kecamatan->desas as $desa)
                                                                <li class="list-group-item">{{ $desa->name }}</li>
                                                            @empty
                                                                <li class="list-group-item text-center">Tidak ada desa</li>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
