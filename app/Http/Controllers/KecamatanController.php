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

    public function create(Kabupaten $kabupaten)
    {
        return view('kecamatan.create', compact('kabupaten'));
    }

    public function store(Request $request, Kabupaten $kabupaten)
    {
        $request->validate(['name' => 'required']);
        $kabupaten->kecamatans()->create($request->all());
        return redirect()->route('kabupaten.index');
    }
}
