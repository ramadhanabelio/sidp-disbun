<?php

namespace App\Http\Controllers;

use App\Models\PemilikKebun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekapSurveyController extends Controller
{
    public function index()
    {
        $pemilikKebuns = PemilikKebun::all();

        return view('admin.rekap-survey.index', compact('pemilikKebuns'));
    }

    public function edit($id)
    {
        $pemilik = PemilikKebun::findOrFail($id);
        return view('admin.rekap-survey.edit', compact('pemilik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_urut' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:16',
            'alamat' => 'required|string',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'status_dalam_rumah_tangga' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jumlah_anggota_rumah_tangga' => 'required|integer',
            'ijazah_tertinggi' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
        ]);

        $pemilik = PemilikKebun::findOrFail($id);
        $pemilik->update($request->all());

        return redirect()->route('rekap-survey.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pemilik = PemilikKebun::findOrFail($id);
        $pemilik->delete();

        return redirect()->route('rekap-survey.index')->with('success', 'Data berhasil dihapus.');
    }
}
