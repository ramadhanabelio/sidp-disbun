@extends('layouts.app')

@section('content')
    <h1>Tambah Kabupaten</h1>
    <form action="{{ route('kabupaten.store') }}" method="POST">
        @csrf
        <label for="name">Nama Kabupaten:</label>
        <input type="text" name="name" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
