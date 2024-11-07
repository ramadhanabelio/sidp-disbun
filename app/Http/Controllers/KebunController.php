<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kebun;
use App\Models\Kecamatan;
use App\Models\PemilikKebun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'pemilik_id' => 'required|exists:pemilik_kebuns,id',
            'status_kepemilikan_lahan' => 'required|string',
            'alamat_kebun' => 'required|string',
            'nomor_dan_tanggal_surat' => 'required|numeric',
            'titik_koordinat' => 'required|string',
            'luas_lahan_tanaman_telah_produksi' => 'required|numeric',
            'luas_lahan_tanaman_belum_produksi' => 'required|numeric',
            'luas_lahan_tanaman_tua_dan_atau_rusak' => 'required|numeric',
            'luas_lahan_belum_ditanam' => 'required|numeric',
            'rata_rata_jumlah_panen_dalam_satu_tahun' => 'required|numeric',
            'rata_rata_produksi_dalam_satu_kali_panen' => 'required|numeric',
            'rata_rata_produksi_dalam_satu_tahun' => 'required|numeric',
            'produktifitas_lahan' => 'required|string',
            'rata_rata_harga_jual_komoditas' => 'required|string',
            'total_penjualan_pertahun' => 'required|string',
            'jenis_tanaman_perkebunan' => 'required|string',
            'bulan_dan_tahun_tanam' => 'required|string',
            'jumlah_pohon' => 'required|string',
            'rata_rata_umur_tanaman' => 'required|string',
            'jenis_lahan' => 'required|string',
            'kondisi_tipografi_lahan' => 'required|string',
            'asal_benih' => 'required|string',
            'pola_tanam' => 'required|string',
            'metode_pembukaan_lahan_perkebunan' => 'required|string',
            'jenis_pupuk' => 'required|string',
            'mitra_pengolahan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Kebun::create([
                'pemilik_kebun_id' => $request->pemilik_id,
                'status_kepemilikan_lahan' => $request->status_kepemilikan_lahan,
                'status_lainnya' => $request->status_lainnya,
                'alamat_kebun' => $request->alamat_kebun,
                'nomor_dan_tanggal_surat' => $request->nomor_dan_tanggal_surat,
                'titik_koordinat' => $request->titik_koordinat,
                'luas_lahan_tanaman_telah_produksi' => $request->luas_lahan_tanaman_telah_produksi,
                'luas_lahan_tanaman_belum_produksi' => $request->luas_lahan_tanaman_belum_produksi,
                'luas_lahan_tanaman_tua_dan_atau_rusak' => $request->luas_lahan_tanaman_tua_dan_atau_rusak,
                'luas_lahan_belum_ditanam' => $request->luas_lahan_belum_ditanam,
                'rata_rata_jumlah_panen_dalam_satu_tahun' => $request->rata_rata_jumlah_panen_dalam_satu_tahun,
                'rata_rata_produksi_dalam_satu_kali_panen' => $request->rata_rata_produksi_dalam_satu_kali_panen,
                'rata_rata_produksi_dalam_satu_tahun' => $request->rata_rata_produksi_dalam_satu_tahun,
                'produktifitas_lahan' => $request->produktifitas_lahan,
                'rata_rata_harga_jual_komoditas' => $request->rata_rata_harga_jual_komoditas,
                'total_penjualan_pertahun' => $request->total_penjualan_pertahun,
                'jenis_tanaman_perkebunan' => $request->jenis_tanaman_perkebunan,
                'bulan_dan_tahun_tanam' => $request->bulan_dan_tahun_tanam,
                'jumlah_pohon' => $request->jumlah_pohon,
                'rata_rata_umur_tanaman' => $request->rata_rata_umur_tanaman,
                'jenis_lahan' => $request->jenis_lahan,
                'kondisi_tipografi_lahan' => $request->kondisi_tipografi_lahan,
                'asal_benih' => $request->asal_benih,
                'pola_tanam' => $request->pola_tanam,
                'pola_tanam_lainnya' => $request->pola_tanam_lainnya,
                'metode_pembukaan_lahan_perkebunan' => $request->metode_pembukaan_lahan_perkebunan,
                'metode_pembukaan_lahan_perkebunan_lainnya' => $request->metode_pembukaan_lahan_perkebunan_lainnya,
                'jenis_pupuk' => $request->jenis_pupuk,
                'jenis_pupuk_lainnya' => $request->jenis_pupuk_lainnya,
                'mitra_pengolahan' => $request->mitra_pengolahan,
                'mitra_pengolahan_lainnya' => $request->mitra_pengolahan_lainnya,
            ]);

            return redirect()->back()->with('success', 'Data kebun berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data kebun. Silakan coba lagi.');
        }
    }
}
