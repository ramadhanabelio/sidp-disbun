<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::all();
        return view('kecamatan.index', compact('kecamatans'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $kabupaten = Kabupaten::findOrFail(1);
        $kabupaten->kecamatans()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan berhasil ditambahkan');
    }

    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatan.edit', compact('kecamatan'));
    }

    public function update(Request $request, Kecamatan $kecamatan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kecamatan->update(['name' => $request->name]);

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan berhasil diperbarui');
    }

    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan berhasil dihapus');
    }
}
