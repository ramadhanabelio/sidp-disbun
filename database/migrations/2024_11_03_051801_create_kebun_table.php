<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kebuns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilik_kebun_id')->constrained('pemilik_kebuns')->onDelete('cascade');
            $table->string('status_kepemilikan_lahan');
            $table->string('status_lainnya')->nullable();
            $table->text('alamat_kebun');
            $table->string('nomor_dan_tanggal_surat');
            $table->string('titik_koordinat');
            $table->decimal('luas_lahan_tanaman_telah_produksi', 10, 2);
            $table->decimal('luas_lahan_tanaman_belum_produksi', 10, 2);
            $table->decimal('luas_lahan_tanaman_tua_dan_atau_rusak', 10, 2);
            $table->decimal('luas_lahan_belum_ditanam', 10, 2);
            $table->decimal('rata_rata_jumlah_panen_dalam_satu_tahun', 10, 2);
            $table->decimal('rata_rata_produksi_dalam_satu_kali_panen', 10, 2);
            $table->decimal('rata_rata_produksi_dalam_satu_tahun', 10, 2);
            $table->decimal('produktifitas_lahan', 10, 2);
            $table->decimal('rata_rata_harga_jual_komoditas', 10, 2);
            $table->decimal('total_penjualan_pertahun', 10, 2);
            $table->string('jenis_tanaman_perkebunan');
            $table->string('bulan_dan_tahun_tanam');
            $table->integer('jumlah_pohon');
            $table->string('rata_rata_umur_tanaman')->nullable();
            $table->string('jenis_lahan')->nullable();
            $table->string('kondisi_tipografi_lahan')->nullable();
            $table->string('asal_benih')->nullable();
            $table->string('pola_tanam')->nullable();
            $table->string('pola_tanam_lainnya')->nullable();
            $table->string('metode_pembukaan_lahan_perkebunan')->nullable();
            $table->string('metode_pembukaan_lahan_perkebunan_lainnya')->nullable();
            $table->string('jenis_pupuk')->nullable();
            $table->string('jenis_pupuk_lainnya')->nullable();
            $table->string('mitra_pengolahan')->nullable();
            $table->string('mitra_pengolahan_lainnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebuns');
    }
};
