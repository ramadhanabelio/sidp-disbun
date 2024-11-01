@extends('layouts.app')

@section('title', 'Edit Kecamatan')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Kecamatan</h5>

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Kecamatan</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $kecamatan->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('kecamatan.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
