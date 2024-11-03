<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\PemilikKebun;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $totalKabupaten = Kabupaten::count();
        $totalKecamatan = Kecamatan::count();
        $totalDesa = Desa::count();
        $totalPemilikKebun = PemilikKebun::count();

        return view('home', compact('totalKabupaten', 'totalKecamatan', 'totalDesa', 'totalPemilikKebun'));
    }

    public function adminHome()
    {
        $totalPemilikKebun = PemilikKebun::count();
        return view('admin.home', compact('totalPemilikKebun'));
    }
}
