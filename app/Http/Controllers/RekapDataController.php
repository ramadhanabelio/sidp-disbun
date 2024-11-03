<?php

namespace App\Http\Controllers;

use App\Models\PemilikKebun;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

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
        return $pdf->stream('Data Survey ' . $pemilikKebun->nama . '.pdf');
    }
}
