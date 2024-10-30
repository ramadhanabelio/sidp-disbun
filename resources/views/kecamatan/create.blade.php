@extends('layouts.app')

@section('content')
    <h1>Tambah Kecamatan untuk Kabupaten {{ $kabupaten->name }}</h1>
    <form action="{{ route('kecamatan.store', $kabupaten->id) }}" method="POST">
        @csrf
        <label for="name">Nama Kecamatan:</label>
        <input type="text" name="name" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
