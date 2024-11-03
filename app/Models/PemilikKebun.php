<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikKebun extends Model
{
    use HasFactory;

    protected $table = 'pemilik_kebuns';

    protected $fillable = [
        'nomor_urut',
        'nama',
        'tempat_tanggal_lahir',
        'nomor_ktp',
        'alamat',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'jenis_kelamin',
        'status_dalam_rumah_tangga',
        'umur',
        'jumlah_anggota_rumah_tangga',
        'ijazah_tertinggi',
        'pekerjaan',
    ];
}
