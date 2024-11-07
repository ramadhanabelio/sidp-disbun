{{-- Tab Keterangan Kebun --}}
<div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="kebun-tab">
    <form action="{{ route('kebun.store') }}" class="row g-3" method="POST">
        @csrf
        <input type="hidden" name="pemilik_kebun_id" value="{{ $pemilik->id ?? '' }}">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <div class="col-md-6 mb-3">
            <label for="status_kepemilikan_lahan" class="form-label">Status kepemilikan lahan</label>
            <select class="form-select" id="status_kepemilikan_lahan" name="status_kepemilikan_lahan">
                <option value="">-- Pilih Status --</option>
                <option value="Sertfikat Hak Milik">Sertfikat Hak Milik</option>
                <option value="Girik/SKT/SKGR">Girik/SKT/SKGR</option>
                <option value="Tanah ulayat/adat">Tanah ulayat/adat</option>
                <option value="Tidak ada status (komunal)">Tidak ada status (komunal)</option>
            </select>
            <input type="text" class="form-control mt-2" id="status_lainnya" name="status_lainnya"
                placeholder="Status lainnya">
        </div>

        <div class="col-md-6 mb-3">
            <label for="alamat_kebun" class="form-label">Alamat Kebun</label>
            <textarea class="form-control" id="alamat_kebun" name="alamat_kebun" rows="3" required></textarea>
        </div>

        <div class="col-md-6 mb-3">
            <label for="nomor_dan_tanggal_surat" class="form-label">Nomor dan Tanggal Surat</label>
            <input type="number" class="form-control" id="nomor_dan_tanggal_surat" name="nomor_dan_tanggal_surat"
                required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="titik_koordinat" class="form-label">Titik Koordinat</label>
            <input type="text" class="form-control" id="titik_koordinat" name="titik_koordinat" required>
        </div>

        <hr>

        <div class="col-md-6 mb-3">
            <label for="luas_lahan_tanaman_telah_produksi" class="form-label">Luas lahan tanaman telah produksi / TM
                (M²)</label>
            <input type="number" class="form-control" id="luas_lahan_tanaman_telah_produksi"
                name="luas_lahan_tanaman_telah_produksi" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="luas_lahan_tanaman_belum_produksi" class="form-label">Luas lahan tanaman belum produksi / TBM
                (M²)</label>
            <input type="number" class="form-control" id="luas_lahan_tanaman_belum_produksi"
                name="luas_lahan_tanaman_belum_produksi" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="luas_lahan_tanaman_tua_dan_atau_rusak" class="form-label">Luas lahan tanaman tua dan atau
                rusak / TTR (M²)</label>
            <input type="number" class="form-control" id="luas_lahan_tanaman_tua_dan_atau_rusak"
                name="luas_lahan_tanaman_tua_dan_atau_rusak" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="luas_lahan_belum_ditanam" class="form-label">Luas lahan belum ditanam (M²)</label>
            <input type="number" class="form-control" id="luas_lahan_belum_ditanam" name="luas_lahan_belum_ditanam"
                required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="rata_rata_jumlah_panen_dalam_satu_tahun" class="form-label">Rata-rata jumlah panen dalam satu
                tahun (Kali)</label>
            <input type="number" class="form-control" id="rata_rata_jumlah_panen_dalam_satu_tahun"
                name="rata_rata_jumlah_panen_dalam_satu_tahun" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="rata_rata_produksi_dalam_satu_kali_panen" class="form-label">Rata-rata produksi dalam satu kali
                panen (Ton)</label>
            <input type="number" class="form-control" id="rata_rata_produksi_dalam_satu_kali_panen"
                name="rata_rata_produksi_dalam_satu_kali_panen" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="rata_rata_produksi_dalam_satu_tahun" class="form-label">Rata-rata produksi dalam satu tahun
                (Ton)</label>
            <input type="number" class="form-control" id="rata_rata_produksi_dalam_satu_tahun"
                name="rata_rata_produksi_dalam_satu_tahun" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="produktifitas_lahan" class="form-label">Produktifitas Lahan (Ton/Ha)</label>
            <input type="text" class="form-control" id="produktifitas_lahan" name="produktifitas_lahan" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="rata_rata_harga_jual_komoditas" class="form-label">Rata-rata harga jual komoditas
                (Rp/Kg)</label>
            <input type="text" class="form-control" id="rata_rata_harga_jual_komoditas"
                name="rata_rata_harga_jual_komoditas" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="total_penjualan_pertahun" class="form-label">Total penjualan pertahun (Rp)</label>
            <input type="text" class="form-control" id="total_penjualan_pertahun" name="total_penjualan_pertahun"
                required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="jenis_tanaman_perkebunan" class="form-label">
                Jenis tanaman perkebunan
                <span class="small">(lihat kode tanaman)</span>
            </label>
            <input type="text" class="form-control" id="jenis_tanaman_perkebunan" name="jenis_tanaman_perkebunan"
                required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="bulan_dan_tahun_tanam" class="form-label">Bulan dan tahun tanam</label>
            <input type="text" class="form-control" id="bulan_dan_tahun_tanam" name="bulan_dan_tahun_tanam"
                required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="jumlah_pohon" class="form-label">Jumlah pohon</label>
            <input type="text" class="form-control" id="jumlah_pohon" name="jumlah_pohon" required>
        </div>

        <hr>

        <div class="col-md-6 mb-3">
            <label for="rata_rata_umur_tanaman" class="form-label">Rata-rata umur tanaman</label>
            <select class="form-select" id="rata_rata_umur_tanaman" name="rata_rata_umur_tanaman">
                <option value="">-- Pilih rata-rata umur tanaman --</option>
                <option value="0-3 tahun">0-3 tahun</option>
                <option value="3-7 tahun">3-7 tahun</option>
                <option value="7-14 tahun">7-14 tahun</option>
                <option value="14-20 tahun">14-20 tahun</option>
                <option value="+ 20 tahun">+ 20 tahun</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="jenis_lahan" class="form-label">Jenis lahan</label>
            <select class="form-select" id="jenis_lahan" name="jenis_lahan">
                <option value="">-- Pilih Jenis Lahan --</option>
                <option value="Lahan gambut">Lahan gambut</option>
                <option value="Lahan non-gambut">Lahan non-gambut</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="kondisi_tipografi_lahan" class="form-label">Kondisi tipografi lahan</label>
            <select class="form-select" id="kondisi_tipografi_lahan" name="kondisi_tipografi_lahan">
                <option value="">-- Pilih jenis lahan --</option>
                <option value="Datar">Datar</option>
                <option value="Kemiringan sedang">Kemiringan sedang</option>
                <option value="Berbukit-bukit">Berbukit-bukit</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="asal_benih" class="form-label">Asal benih</label>
            <select class="form-select" id="asal_benih" name="asal_benih">
                <option value="">-- Pilih asal benih --</option>
                <option value="Produsen benih bersertifikat">Produsen benih bersertifikat</option>
                <option value="Penangkar benih bersertifikat">Penangkar benih bersertifikat</option>
                <option value="Distributor benih tak bersertifikat">Distributor benih tak bersertifikat</option>
                <option value="Pekebun lain">Pekebun lain</option>
                <option value="Benih sendiri">Benih sendiri</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="pola_tanam" class="form-label">Pola tanam</label>
            <select class="form-select" id="pola_tanam" name="pola_tanam">
                <option value="">-- Pilih Pola Tanam --</option>
                <option value="Monokultur">Monokultur</option>
                <option value="Campuran">Campuran</option>
            </select>
            <input type="text" class="form-control mt-2" id="pola_tanam_lainnya" name="pola_tanam_lainnya"
                placeholder="Pola tanam lainnya">
        </div>

        <div class="col-md-6 mb-3">
            <label for="metode_pembukaan_lahan_perkebunan" class="form-label">Metode pembukaan lahan
                perkebunan</label>
            <select class="form-select" id="metode_pembukaan_lahan_perkebunan"
                name="metode_pembukaan_lahan_perkebunan">
                <option value="">-- Pilih metode pembukaan lahan perkebunan --</option>
                <option value="Dibakar">Dibakar</option>
                <option value="Tidak dibakar/steking">Tidak dibakar/steking</option>
                <option value="Campuran">Campuran</option>
            </select>
            <input type="text" class="form-control mt-2" id="metode_pembukaan_lahan_perkebunan_lainnya"
                name="metode_pembukaan_lahan_perkebunan_lainnya"
                placeholder="Metode pembukaan lahan perkebunan lainnya">
        </div>

        <div class="col-md-6 mb-3">
            <label for="jenis_pupuk" class="form-label">Jenis pupuk</label>
            <select class="form-select" id="jenis_pupuk" name="jenis_pupuk">
                <option value="">-- Pilih Jenis Pupuk --</option>
                <option value="Organik">Organik</option>
                <option value="Non Organik">Non Organik</option>
            </select>
            <input type="text" class="form-control mt-2" id="jenis_pupuk_lainnya" name="jenis_pupuk_lainnya"
                placeholder="Jenis pupuk lainnya">
        </div>

        <div class="col-md-6 mb-3">
            <label for="mitra_pengolahan" class="form-label">Mitra Pengolahan</label>
            <select class="form-select" id="mitra_pengolahan" name="mitra_pengolahan">
                <option value="">-- Pilih Mitra Pengolahan --</option>
                <option value="Koperasi">Koperasi</option>
                <option value="Perusahaan Pengolahan">Perusahaan Pengolahan</option>
            </select>
            <input type="text" class="form-control mt-2" id="mitra_pengolahan_lainnya"
                name="mitra_pengolahan_lainnya" placeholder="Mitra pengolahan lainnya">
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
</div>
