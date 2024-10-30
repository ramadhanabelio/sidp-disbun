@extends('layouts.app')

@section('title', 'Daftar Kabupaten')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            <h1>Daftar Kabupaten</h1>
                            <a href="{{ route('kabupaten.create') }}">Tambah Kabupaten</a>
                            <ul>
                                @foreach ($kabupatens as $kabupaten)
                                    <li>
                                        {{ $kabupaten->name }}
                                        <ul>
                                            @foreach ($kabupaten->kecamatans as $kecamatan)
                                                <li>
                                                    {{ $kecamatan->name }}
                                                    <ul>
                                                        @foreach ($kecamatan->desas as $desa)
                                                            <li>{{ $desa->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <a href="{{ route('desa.create', $kecamatan->id) }}">Tambah Desa</a>
                                                </li>
                                            @endforeach
                                            <a href="{{ route('kecamatan.create', $kabupaten->id) }}">Tambah Kecamatan</a>
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
