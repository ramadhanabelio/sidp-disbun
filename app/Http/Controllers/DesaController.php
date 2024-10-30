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

    public function store(Request $request, Kecamatan $kecamatan)
    {
        $request->validate(['name' => 'required']);
        $kecamatan->desas()->create($request->all());
        return redirect()->route('kabupaten.index');
    }
}
