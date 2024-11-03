<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\PemilikKebun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekapDataController extends Controller
{
    public function index()
    {
        $pemilikKebuns = PemilikKebun::all();

        return view('rekap-data.index', compact('pemilikKebuns'));
    }

    public function cetakPdf($id)
    {
        $pemilikKebun = PemilikKebun::findOrFail($id);

        $pdf = Pdf::loadView('rekap-data.cetak', compact('pemilikKebun'));
        return $pdf->stream('Data_Pemilik_Kebun_' . $pemilikKebun->nama . '.pdf');
    }
}
