<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupatens = Kabupaten::with('kecamatans.desas')->get();
        return view('kabupaten.index', compact('kabupatens'));
    }

    public function create()
    {
        return view('kabupaten.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Kabupaten::create($request->all());
        return redirect()->route('kabupaten.index');
    }
}
