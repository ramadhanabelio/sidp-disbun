<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendataanController extends Controller
{
    public function index()
    {
        return view('admin.pendataan.index');
    }
}
