@extends('admin.layouts.app')

@section('title', 'Edit Data Masyarakat')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data Masyarakat</h5>

                        <!-- Form Edit Data -->
                        <form action="{{ route('rekap-survey.update', $pemilik->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nomor_urut" class="form-label">Nomor Urut</label>
                                <input type="text" class="form-control" id="nomor_urut" name="nomor_urut"
                                    value="{{ old('nomor_urut', $pemilik->nomor_urut) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pemilik</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $pemilik->nama) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="tempat_tanggal_lahir" class="form-label">Tempat, Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tempat_tanggal_lahir"
                                    name="tempat_tanggal_lahir"
                                    value="{{ old('tempat_tanggal_lahir', $pemilik->tempat_tanggal_lahir) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                                <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp"
                                    value="{{ old('nomor_ktp', $pemilik->nomor_ktp) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="2" required>{{ old('alamat', $pemilik->alamat) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi"
                                    value="{{ old('provinsi', $pemilik->provinsi) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="kabupaten_kota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota"
                                    value="{{ old('kabupaten_kota', $pemilik->kabupaten_kota) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    value="{{ old('kecamatan', $pemilik->kecamatan) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="desa_kelurahan" class="form-label">Desa/Kelurahan</label>
                                <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan"
                                    value="{{ old('desa_kelurahan', $pemilik->desa_kelurahan) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="Laki-laki"
                                        {{ $pemilik->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ $pemilik->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status_dalam_rumah_tangga" class="form-label">Status dalam Rumah Tangga</label>
                                <input type="text" class="form-control" id="status_dalam_rumah_tangga"
                                    name="status_dalam_rumah_tangga"
                                    value="{{ old('status_dalam_rumah_tangga', $pemilik->status_dalam_rumah_tangga) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur"
                                    value="{{ old('umur', $pemilik->umur) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_anggota_rumah_tangga" class="form-label">Jumlah Anggota Rumah
                                    Tangga</label>
                                <input type="number" class="form-control" id="jumlah_anggota_rumah_tangga"
                                    name="jumlah_anggota_rumah_tangga"
                                    value="{{ old('jumlah_anggota_rumah_tangga', $pemilik->jumlah_anggota_rumah_tangga) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="ijazah_tertinggi" class="form-label">Ijazah Tertinggi</label>
                                <input type="text" class="form-control" id="ijazah_tertinggi" name="ijazah_tertinggi"
                                    value="{{ old('ijazah_tertinggi', $pemilik->ijazah_tertinggi) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                    value="{{ old('pekerjaan', $pemilik->pekerjaan) }}" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('rekap-survey.index') }}" class="btn btn-secondary me-2">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
