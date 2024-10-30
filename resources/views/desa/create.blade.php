@extends('layouts.app')

@section('content')
    <h1>Tambah Desa untuk Kecamatan {{ $kecamatan->name }}</h1>
    <form action="{{ route('desa.store', $kecamatan->id) }}" method="POST">
        @csrf
        <label for="name">Nama Desa:</label>
        <input type="text" name="name" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
