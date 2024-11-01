<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Http\Controllers\Controller;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupatens = Kabupaten::all();
        return view('kabupaten.index', compact('kabupatens'));
    }
}
