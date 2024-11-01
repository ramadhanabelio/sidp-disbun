@extends('layouts.app')

@section('title', 'Edit Desa')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Desa: {{ $desa->name }}</h5>

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('desa.update', $desa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Desa</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $desa->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('desa.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
