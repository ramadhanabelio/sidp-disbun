<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\PemilikKebun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemilikKebunController extends Controller
{
    public function index()
    {
        $kabupaten = Kabupaten::find(1);
        $kecamatans = $kabupaten ? $kabupaten->kecamatans : collect();
        $desas = Desa::all();

        return view('admin.pendataan.index', compact('kecamatans', 'kabupaten', 'desas'));
    }

    public function create()
    {
        return view('admin.pendataan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_urut' => 'required|integer',
            'nama' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:20',
            'tempat' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
            'kecamatan' => 'required',
            'desa_kelurahan' => 'required',
            'status_dalam_rumah_tangga' => 'required|string',
            'jumlah_anggota_rumah_tangga' => 'required|integer',
            'ijazah_tertinggi' => 'nullable|string',
            'ijazah_lainnya' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'pekerjaan_lainnya' => 'nullable|string',
        ]);

        try {
            $tanggal_lahir_formatted = date('d-m-Y', strtotime($request->tanggal_lahir));
            $ijazah_tertinggi = $request->ijazah_tertinggi ?? $request->ijazah_lainnya;
            $pekerjaan = $request->pekerjaan ?? $request->pekerjaan_lainnya;

            $kecamatan = Kecamatan::find($request->kecamatan);
            $desa = Desa::find($request->desa_kelurahan);

            $pemilikKebun = PemilikKebun::create([
                'nomor_urut' => $request->nomor_urut,
                'nama' => $request->nama,
                'nomor_ktp' => $request->nomor_ktp,
                'tempat_tanggal_lahir' => $request->tempat . ', ' . $tanggal_lahir_formatted,
                'alamat' => $request->alamat,
                'provinsi' => 'Riau',
                'kabupaten_kota' => $request->kabupaten_kota ?? 'Bengkalis',
                'kecamatan' => $kecamatan ? $kecamatan->name : null,
                'desa_kelurahan' => $desa ? $desa->name : null,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status_dalam_rumah_tangga' => $request->status_dalam_rumah_tangga,
                'umur' => $request->umur,
                'jumlah_anggota_rumah_tangga' => $request->jumlah_anggota_rumah_tangga,
                'ijazah_tertinggi' => $ijazah_tertinggi,
                'pekerjaan' => $pekerjaan,
            ]);

            session(['pemilik_kebun_id' => $pemilikKebun->id]);

            return redirect()->route('pendataan.index')
                ->with('status', 'success')
                ->with('success', 'Data pemilik kebun berhasil disimpan! Silakan tambahkan data kebun.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal disimpan! Silahkan coba lagi.');
        }
    }

    public function show($id)
    {
        $pemilikKebun = PemilikKebun::findOrFail($id);
        return view('pemilik_kebun.show', compact('pemilikKebun'));
    }

    public function edit($id)
    {
        $pemilikKebun = PemilikKebun::findOrFail($id);
        return view('pemilik_kebun.edit', compact('pemilikKebun'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nomor_urut' => 'required|integer|unique:pemilik_kebuns,nomor_urut,' . $id,
            'nama' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:255|unique:pemilik_kebuns,nomor_ktp,' . $id,
            'alamat' => 'required|string',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status_dalam_rumah_tangga' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jumlah_anggota_rumah_tangga' => 'required|integer',
            'ijazah_tertinggi' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
        ]);

        $pemilikKebun = PemilikKebun::findOrFail($id);
        $pemilikKebun->update($data);

        return redirect()->route('admin.pendataan.index')->with('success', 'Data Pemilik Kebun berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pemilikKebun = PemilikKebun::findOrFail($id);
        $pemilikKebun->delete();

        return redirect()->route('admin.pendataan.index')->with('success', 'Data Pemilik Kebun berhasil dihapus.');
    }

    public function getKecamatan($kabupatenId)
    {
        $kecamatans = Kecamatan::where('kabupaten_id', $kabupatenId)->get();
        return response()->json($kecamatans);
    }

    public function getDesas($kecamatanId)
    {
        $desas = Desa::where('kecamatan_id', $kecamatanId)->get();
        return response()->json($desas);
    }
}
