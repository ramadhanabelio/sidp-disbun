<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemilik_kebuns', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut')->nullable();
            $table->string('nama');
            $table->string('tempat_tanggal_lahir')->nullable();
            $table->string('nomor_ktp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('status_dalam_rumah_tangga')->nullable();
            $table->integer('umur')->nullable();
            $table->integer('jumlah_anggota_rumah_tangga')->nullable();
            $table->string('ijazah_tertinggi')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_kebun');
    }
};
