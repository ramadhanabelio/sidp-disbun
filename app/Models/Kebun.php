<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebun extends Model
{
    use HasFactory;

    protected $table = 'kebun';

    protected $fillable = [
        'pemilik_kebun_id',
        'status_kepemilikan_lahan',
        'status_lainnya',
        'alamat_kebun',
        'nomor_dan_tanggal_surat',
        'titik_koordinat',
        'luas_lahan_tanaman_telah_produksi',
        'luas_lahan_tanaman_belum_produksi',
        'luas_lahan_tanaman_tua_dan_atau_rusak',
        'luas_lahan_belum_ditanam',
        'rata_rata_jumlah_panen_dalam_satu_tahun',
        'rata_rata_produksi_dalam_satu_kali_panen',
        'rata_rata_produksi_dalam_satu_tahun',
        'produktifitas_lahan',
        'rata_rata_harga_jual_komoditas',
        'total_penjualan_pertahun',
        'jenis_tanaman_perkebunan',
        'bulan_dan_tahun_tanam',
        'jumlah_pohon',
        'rata_rata_umur_tanaman',
        'jenis_lahan',
        'kondisi_tipografi_lahan',
        'asal_benih',
        'pola_tanam',
        'pola_tanam_lainnya',
        'metode_pembukaan_lahan_perkebunan',
        'metode_pembukaan_lahan_perkebunan_lainnya',
        'jenis_pupuk',
        'jenis_pupuk_lainnya',
        'mitra_pengolahan',
        'mitra_pengolahan_lainnya',
    ];

    public function pemilikKebun()
    {
        return $this->belongsTo(PemilikKebun::class);
    }
}
