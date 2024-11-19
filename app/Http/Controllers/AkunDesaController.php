<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class AkunDesaController extends Controller
{
    public function index()
    {
        $admins = User::where('status', 'admin')->get();

        return view('akun-desa.index', compact('admins'));
    }
}
