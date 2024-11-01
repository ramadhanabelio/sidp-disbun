<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesaController extends Controller
{
    public function index()
    {
        $desas = Desa::all();
        return view('desa.index', compact('desas'));
    }

    public function create(Kecamatan $kecamatan)
    {
        return view('desa.create', compact('kecamatan'));
    }

    public function store(Request $request, $kecamatan_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kecamatan = Kecamatan::findOrFail($kecamatan_id);

        $kecamatan->desas()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('kecamatan.index')->with('success', 'Desa berhasil ditambahkan');
    }

    public function edit(Desa $desa)
    {
        return view('desa.edit', compact('desa'));
    }

    public function update(Request $request, Desa $desa)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $desa->update([
            'name' => $request->name,
        ]);

        return redirect()->route('desa.index')->with('success', 'Desa berhasil diperbarui');
    }

    public function destroy(Desa $desa)
    {
        $desa->delete();
        return redirect()->route('desa.index')->with('success', 'Desa berhasil dihapus');
    }
}
