<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kebun;
use App\Models\Kecamatan;
use App\Models\PemilikKebun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KebunController extends Controller
{
    public function create()
    {
        $pemilikKebun = PemilikKebun::all();

        $kecamatans = Kecamatan::all();
        $desas = Desa::all();

        return view('admin.pendataan.index', compact('pemilikKebun', 'kecamatans', 'desas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pemilik_kebun_id' => 'required|exists:pemilik_kebuns,id',
            'status_kepemilikan_lahan' => 'required|string|max:255',
            'status_lainnya' => 'nullable|string|max:255',
            'alamat_kebun' => 'required|string|max:500',
            'nomor_dan_tanggal_surat' => 'required|string|max:255',
            'titik_koordinat' => 'required|string|max:255',
            'luas_lahan_tanaman_telah_produksi' => 'required|numeric',
            'luas_lahan_tanaman_belum_produksi' => 'required|numeric',
            'luas_lahan_tanaman_tua_dan_atau_rusak' => 'required|numeric',
            'luas_lahan_belum_ditanam' => 'required|numeric',
            'rata_rata_jumlah_panen_dalam_satu_tahun' => 'required|numeric',
            'rata_rata_produksi_dalam_satu_kali_panen' => 'required|numeric',
            'rata_rata_produksi_dalam_satu_tahun' => 'required|numeric',
            'produktifitas_lahan' => 'required|numeric',
            'rata_rata_harga_jual_komoditas' => 'required|numeric',
            'total_penjualan_pertahun' => 'required|numeric',
            'jenis_tanaman_perkebunan' => 'required|string|max:255',
            'bulan_dan_tahun_tanam' => 'required|string|max:255',
            'jumlah_pohon' => 'required|integer',
            'rata_rata_umur_tanaman' => 'nullable|string|max:255',
            'jenis_lahan' => 'nullable|string|max:255',
            'kondisi_tipografi_lahan' => 'nullable|string|max:255',
            'asal_benih' => 'nullable|string|max:255',
            'pola_tanam' => 'nullable|string|max:255',
            'pola_tanam_lainnya' => 'nullable|string|max:255',
            'metode_pembukaan_lahan_perkebunan' => 'nullable|string|max:255',
            'metode_pembukaan_lahan_perkebunan_lainnya' => 'nullable|string|max:255',
            'jenis_pupuk' => 'nullable|string|max:255',
            'jenis_pupuk_lainnya' => 'nullable|string|max:255',
            'mitra_pengolahan' => 'nullable|string|max:255',
            'mitra_pengolahan_lainnya' => 'nullable|string|max:255',
        ]);

        Kebun::create($request->all());

        return redirect()->route('kebun.index')->with('success', 'Data kebun berhasil disimpan.');
    }
}
