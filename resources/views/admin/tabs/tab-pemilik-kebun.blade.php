{{-- Tab Keterangan Pemilik Kebun --}}
<div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="pemilik-kebun-tab">
    <form action="{{ route('pemilik_kebun.store') }}" class="row g-3" method="POST">
        @csrf

        <div class="col-md-12 mb-3">
            <label for="nomor_urut" class="form-label">Nomor Urut</label>
            <input type="number" class="form-control" id="nomor_urut" name="nomor_urut" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="nomor_ktp" class="form-label">Nomor KTP</label>
            <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div>
                <input class="form-check-input" type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki"
                    required>
                <label class="ms-2 me-3" for="laki-laki">Laki-laki</label>
                <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"
                    required>
                <label class="ms-2 me-3" for="perempuan">Perempuan</label>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
        </div>

        <div class="col-md-12 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <div class="col-md-3 mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Riau" disabled>
        </div>

        <div class="col-md-3 mb-3">
            <label for="kabupaten_kota" class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota"
                value="{{ $kabupaten->name ?? 'Bengkalis' }}" disabled>
        </div>

        <div class="col-md-3 mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <select class="form-select" id="kecamatan" name="kecamatan" onchange="updateDesa()">
                <option value="">Pilih Kecamatan</option>
                @foreach ($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="desa" class="form-label">Desa/Kelurahan</label>
            <select class="form-select" id="desa_kelurahan" name="desa_kelurahan">
                <option value="">Pilih Desa</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="status_dalam_rumah_tangga" class="form-label">Status dalam rumah tangga</label>
            <div>
                <input class="form-check-input" type="radio" id="kepala_keluarga" name="status_dalam_rumah_tangga"
                    value="Kepala Keluarga" required>
                <label for="kepala_keluarga" class="ms-2 me-3">Kepala Keluarga</label>
                <input class="form-check-input" type="radio" id="istri" name="status_dalam_rumah_tangga"
                    value="Istri" required>
                <label for="istri" class="ms-2 me-3">Istri</label>
                <input class="form-check-input" type="radio" id="anak" name="status_dalam_rumah_tangga"
                    value="Anak" required>
                <label for="anak" class="ms-2 me-3">Anak</label>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="jumlah_anggota_rumah_tangga" class="form-label">Jumlah anggota rumah tangga</label>
            <input type="number" class="form-control" id="jumlah_anggota_rumah_tangga"
                name="jumlah_anggota_rumah_tangga" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="ijazah_tertinggi" class="form-label">Ijazah tertinggi yang dimiliki</label>
            <select class="form-select" id="ijazah_tertinggi" name="ijazah_tertinggi">
                <option value="">-- Pilih Ijazah --</option>
                <option value="Tidak punya ijazah">Tidak punya ijazah</option>
                <option value="SD/sederajat">SD/sederajat</option>
                <option value="SMP/sederajat">SMP/sederajat</option>
                <option value="SMA/sederajat">SMA/sederajat</option>
                <option value="SMK">SMK</option>
                <option value="D1/D2">D1/D2</option>
                <option value="D3/Sarjana Muda">D3/Sarjana Muda</option>
                <option value="D4/S1">D4/S1</option>
                <option value="S2/S3">S2/S3</option>
            </select>
            <input type="text" class="form-control mt-2" id="ijazah_lainnya" name="ijazah_lainnya"
                placeholder="Ijazah lainnya">
        </div>

        <div class="col-md-6 mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan selain memilik
                kebun</label>
            <select class="form-select" id="pekerjaan" name="pekerjaan">
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Buruh tani/kebun">Buruh tani/kebun</option>
                <option value="Buruh lainnya">Buruh lainnya</option>
                <option value="Petani/peternak">Petani/peternak</option>
                <option value="PNS">PNS</option>
                <option value="TNI/Polri">TNI/Polri</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Pegawai swasta">Pegawai swasta</option>
            </select>
            <input type="text" class="form-control mt-2" id="pekerjaan_lainnya" name="pekerjaan_lainnya"
                placeholder="Pekerjaan lainnya">
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
</div>
