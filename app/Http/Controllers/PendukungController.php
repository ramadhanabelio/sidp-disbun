<?php

namespace App\Http\Controllers;

use App\Models\Pendukung;
use Illuminate\Http\Request;

class PendukungController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pupuk_upah' => 'required|numeric',
            'pestisida_upah' => 'required|numeric',
            'pembersihan_upah' => 'required|numeric',
            'panen_upah' => 'required|numeric',
            'pengeluaran_lain' => 'nullable|numeric',
            'total_biaya_produksi' => 'required|numeric',
            'kesulitan_menjual' => 'required|boolean',
            'kesulitan_utama' => 'nullable|string',
            'cara_menentukan_harga' => 'nullable|string',
            'masalah_produksi' => 'array|nullable',
            'kebutuhan' => 'array|nullable',
            'lahan_diremajakan' => 'required|string',
            'jumlah_lahan' => 'nullable|numeric',
            'skema_peremajaan' => 'required|string'
        ]);

        Pendukung::create([
            'pemilik_id' => $request->pemilik_id,
            'pupuk_upah' => $request->pupuk_upah,
            'pestisida_upah' => $request->pestisida_upah,
            'pembersihan_upah' => $request->pembersihan_upah,
            'panen_upah' => $request->panen_upah,
            'pengeluaran_lain' => $request->pengeluaran_lain,
            'total_biaya_produksi' => $request->total_biaya_produksi,
            'kesulitan_menjual' => $request->kesulitan_menjual,
            'kesulitan_utama' => $request->kesulitan_utama,
            'cara_menentukan_harga' => $request->cara_menentukan_harga,
            'masalah_produksi' => json_encode($request->masalah_produksi),
            'kebutuhan' => json_encode($request->kebutuhan),
            'lahan_diremajakan' => $request->lahan_diremajakan,
            'jumlah_lahan' => $request->jumlah_lahan,
            'skema_peremajaan' => $request->skema_peremajaan,
        ]);

        return redirect()->route('pendataan.index')
            ->with('success', 'Sukses, data anda telah tersimpan!');
    }
}
