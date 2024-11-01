@extends('layouts.app')

@section('title', 'Daftar Kabupaten')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kabupaten</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kabupatens as $kabupaten)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $kabupaten->name }}</td>
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
