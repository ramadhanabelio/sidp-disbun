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

        $existingDesa = $kecamatan->desas()->where('name', $request->name)->first();

        if ($existingDesa) {
            return redirect()->route('kecamatan.index')->with('error', 'Desa ini sudah ada');
        }

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

    public function createUserAccount($desaId)
    {
        $desa = Desa::findOrFail($desaId);

        $existingUsers = \App\Models\User::where('name', 'LIKE', "Admin {$desa->name}%")->get();

        if ($existingUsers->count() >= 2) {
            return redirect()->route('desa.index')->with('error', 'Maksimal 2 akun sudah tercapai untuk desa ' . $desa->name);
        }

        $accountNumber = $existingUsers->count() + 1;
        $userName = "Admin {$desa->name} {$accountNumber}";

        \App\Models\User::create([
            'name' => $userName,
            'email' => strtolower(str_replace(' ', '', $desa->name)) . $accountNumber . '@admin.disbun.bengkaliskab.go.id',
            'password' => bcrypt('12345678'),
            'status' => 'admin',
        ]);

        return redirect()->route('desa.index')->with('success', 'Akun berhasil dibuat untuk desa ' . $desa->name);
    }
}
