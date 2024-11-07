{{-- Tab Keterangan Pendukung --}}
<div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="pendukung-tab">
    <form action="{{ route('pendukung.store') }}" class="row g-3" method="POST">
        @csrf
        <input type="hidden" name="pemilik_kebun_id" value="{{ $pemilik->id ?? '' }}">

        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: "{{ session('success') }}",
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        <h5>Biaya Produksi Perbulan</h5>
        <div class="col-md-6 mb-3">
            <label for="pupuk_upah" class="form-label">Pupuk + Upah</label>
            <input type="text" class="form-control" id="pupuk_upah" name="pupuk_upah">
        </div>

        <div class="col-md-6 mb-3">
            <label for="pestisida_upah" class="form-label">Pestisida + Upah</label>
            <input type="text" class="form-control" id="pestisida_upah" name="pestisida_upah">
        </div>

        <div class="col-md-6 mb-3">
            <label for="pembersihan_upah" class="form-label">Pembersihan Kebun + Upah</label>
            <input type="text" class="form-control" id="pembersihan_upah" name="pembersihan_upah">
        </div>

        <div class="col-md-6 mb-3">
            <label for="panen_upah" class="form-label">Panen + Upah</label>
            <input type="text" class="form-control" id="panen_upah" name="panen_upah">
        </div>

        <div class="col-md-6 mb-3">
            <label for="pengeluaran_lain" class="form-label">Pengeluaran Lain</label>
            <input type="text" class="form-control" id="pengeluaran_lain" name="pengeluaran_lain">
        </div>

        <div class="col-md-6 mb-3">
            <label for="total_biaya_produksi" class="form-label">Total Biaya Produksi</label>
            <input type="text" class="form-control" id="total_biaya_produksi" name="total_biaya_produksi">
        </div>

        <hr>

        <h5>Masalah dalam Penjualan Hasil Kebun</h5>
        <div class="col-md-6 mb-3">
            <label class="form-label">Apakah kesulitan menjual hasil kebun?</label>
            <div>
                <input type="radio" id="kesulitan_ya" name="kesulitan_menjual" value="1">
                <label for="kesulitan_ya">Ya</label>
                <input type="radio" id="kesulitan_tidak" name="kesulitan_menjual" value="0">
                <label for="kesulitan_tidak">Tidak</label>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="kesulitan_utama" class="form-label">Jika sulit, apa kesulitan utamanya?</label>
            <textarea class="form-control" id="kesulitan_utama" name="kesulitan_utama" rows="3"></textarea>
        </div>

        <h5>Bagaimana Menentukan Harga Jual</h5>
        <div class="col-md-12 mb-3">
            <label for="cara_menentukan_harga" class="form-label">Bagaimana cara Anda menentukan harga jual?</label>
            <textarea class="form-control" id="cara_menentukan_harga" name="cara_menentukan_harga" rows="3"></textarea>
        </div>

        <hr>

        <h5>Masalah dalam Meningkatkan Produksi</h5>
        <div class="col-md-12 mb-3">
            <label class="form-label">Apa masalah yang Anda hadapi untuk meningkatkan produksi?</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]"
                    value="Bibit yang kurang bagus" id="masalah_bibit_kurang_bagus">
                <label class="form-check-label" for="masalah_bibit_kurang_bagus">
                    Bibit yang kurang bagus
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]"
                    value="Pupuk/pestisida tidak tersedia" id="masalah_pupuk_tidak_tersedia">
                <label class="form-check-label" for="masalah_pupuk_tidak_tersedia">
                    Pupuk/pestisida tidak tersedia
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]" value="Pupuk/pestisida mahal"
                    id="masalah_pupuk_mahal">
                <label class="form-check-label" for="masalah_pupuk_mahal">
                    Pupuk/pestisida mahal
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]" value="Harga murah"
                    id="masalah_harga_murah">
                <label class="form-check-label" for="masalah_harga_murah">
                    Harga murah
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]"
                    value="Cuaca yang tidak mendukung" id="masalah_cuaca_tidak_mendukung">
                <label class="form-check-label" for="masalah_cuaca_tidak_mendukung">
                    Cuaca yang tidak mendukung
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]"
                    value="Lahan yang tidak bagus" id="masalah_lahan_tidak_bagus">
                <label class="form-check-label" for="masalah_lahan_tidak_bagus">
                    Lahan yang tidak bagus
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]"
                    value="Biaya perawatan mahal" id="masalah_biaya_perawatan_mahal">
                <label class="form-check-label" for="masalah_biaya_perawatan_mahal">
                    Biaya perawatan mahal
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masalah_produksi[]" value="Lainnya"
                    id="masalah_lainnya">
                <label class="form-check-label" for="masalah_lainnya">
                    Lainnya
                </label>
                <input type="text" class="form-control mt-2" id="masalah_lainnya_text"
                    name="masalah_lainnya_text" placeholder="Masukkan masalah lainnya">
            </div>
        </div>

        <hr>

        <h5>Kebutuhan untuk Meningkatkan Hasil Produksi</h5>
        <div class="col-md-12">
            <label class="form-label">Apa yang Anda butuhkan untuk meningkatkan hasil produksi?</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Permodalan" id="permodalan"
                    name="kebutuhan[]">
                <label class="form-check-label" for="permodalan">Permodalan</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Akses pasar yang mudah" id="akses_pasar"
                    name="kebutuhan[]">
                <label class="form-check-label" for="akses_pasar">Akses pasar yang mudah</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Harga yang lebih baik" id="harga_baik"
                    name="kebutuhan[]">
                <label class="form-check-label" for="harga_baik">Harga yang lebih baik</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bibit berkualitas" id="bibit_berkualitas"
                    name="kebutuhan[]">
                <label class="form-check-label" for="bibit_berkualitas">Bibit berkualitas</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pupuk dan pestisida terjangkau"
                    id="pupuk_terjangkau" name="kebutuhan[]">
                <label class="form-check-label" for="pupuk_terjangkau">Pupuk dan pestisida terjangkau</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Teknologi pertanian" id="teknologi_pertanian"
                    name="kebutuhan[]">
                <label class="form-check-label" for="teknologi_pertanian">Teknologi pertanian</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pelatihan dan pendampingan"
                    id="pelatihan_pendampingan" name="kebutuhan[]">
                <label class="form-check-label" for="pelatihan_pendampingan">Pelatihan dan pendampingan</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Jaminan harga hasil panen" id="jaminan_harga"
                    name="kebutuhan[]">
                <label class="form-check-label" for="jaminan_harga">Jaminan harga hasil panen</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Irigasi" id="irigasi" name="kebutuhan[]">
                <label class="form-check-label" for="irigasi">Irigasi</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pengelolaan pasca panen"
                    id="pengelolaan_pasca_panen" name="kebutuhan[]">
                <label class="form-check-label" for="pengelolaan_pasca_panen">Pengelolaan pasca panen</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Perbaikan kualitas tanah" id="kualitas_tanah"
                    name="kebutuhan[]">
                <label class="form-check-label" for="kualitas_tanah">Perbaikan kualitas tanah</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Transportasi hasil panen"
                    id="transportasi_hasil_panen" name="kebutuhan[]">
                <label class="form-check-label" for="transportasi_hasil_panen">Transportasi hasil panen</label>
            </div>

            <!-- Text input for "Lainnya" -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Lainnya" id="kebutuhan_lainnya_checkbox"
                    name="kebutuhan[]">
                <label class="form-check-label" for="kebutuhan_lainnya_checkbox">Lainnya</label>
                <input type="text" class="form-control mt-2" id="kebutuhan_lainnya" name="kebutuhan_lainnya"
                    placeholder="Masukkan kebutuhan lainnya">
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Apakah ada lahan perkebunan yang sudah harus diremajakan?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="lahan_diremajakan" id="lahan_ya"
                    value="ya">
                <label class="form-check-label" for="lahan_ya">Ya</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="lahan_diremajakan" id="lahan_tidak"
                    value="tidak">
                <label class="form-check-label" for="lahan_tidak">Tidak</label>
            </div>
        </div>

        <div class="col-md-12 mb-3" id="jumlah_lahan_container" style="display: none;">
            <label for="jumlah_lahan" class="form-label">Jika ada, berapa jumlahnya? (ha)</label>
            <input type="number" class="form-control" id="jumlah_lahan" name="jumlah_lahan"
                placeholder="Masukkan jumlah lahan dalam hektar">
        </div>

        <h5>Masalah dalam Meningkatkan Produksi</h5>
        <div class="col-md-12">
            <label class="form-label">Apa masalah yang Anda hadapi untuk meningkatkan produksi?</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="tidak_ada_modal" id="tidak_ada_modal"
                    name="masalah_produksi[]">
                <label class="form-check-label" for="tidak_ada_modal">Tidak ada modal</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="sulit_mendapatkan_bibit"
                    id="sulit_mendapatkan_bibit" name="masalah_produksi[]">
                <label class="form-check-label" for="sulit_mendapatkan_bibit">Sulit mendapatkan bibit</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="kurangnya_teknologi" id="kurangnya_teknologi"
                    name="masalah_produksi[]">
                <label class="form-check-label" for="kurangnya_teknologi">Kurangnya teknologi</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="kendala_iklim" id="kendala_iklim"
                    name="masalah_produksi[]">
                <label class="form-check-label" for="kendala_iklim">Kendala iklim/cuaca</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="sulitnya_mendapatkan_tenaga_kerja"
                    id="sulitnya_mendapatkan_tenaga_kerja" name="masalah_produksi[]">
                <label class="form-check-label" for="sulitnya_mendapatkan_tenaga_kerja">Sulit mendapatkan tenaga
                    kerja</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="ketersediaan_air" id="ketersediaan_air"
                    name="masalah_produksi[]">
                <label class="form-check-label" for="ketersediaan_air">Ketersediaan air terbatas</label>
            </div>

            <!-- Add a custom text field for "Lainnya" -->
            <input type="text" class="form-control mt-2" id="masalah_produksi_lainnya"
                name="masalah_produksi_lainnya" placeholder="Lainnya (sebutkan)">
        </div>

        <hr>

        <h5>Skema Bantuan Peremajaan yang Diinginkan</h5>
        <div class="col-md-12 mb-3">
            <label for="skema_peremajaan" class="form-label">Bagaimana skema bantuan peremajaan yang Anda
                inginkan?</label>
            <select class="form-select" id="skema_peremajaan" name="skema_peremajaan">
                <option value="1">Diberikan permodalan langsung</option>
                <option value="2">Diberikan permodalan melalui koperasi</option>
                <option value="3">Disediakan bibit dan pupuk</option>
                <option value="4">Pemerintah kerjasama dengan perusahaan dalam melakukan peremajaan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
</div>

<script>
    document.getElementById('lahan_ya').addEventListener('change', function() {
        document.getElementById('jumlah_lahan_container').style.display = this.checked ? 'block' : 'none';
    });

    document.getElementById('lahan_tidak').addEventListener('change', function() {
        document.getElementById('jumlah_lahan_container').style.display = !this.checked ? 'block' : 'none';
    });
</script>
