<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $totalKabupaten = Kabupaten::count();
        $totalKecamatan = Kecamatan::count();
        $totalDesa = Desa::count();

        return view('home', compact('totalKabupaten', 'totalKecamatan', 'totalDesa'));
    }
}
