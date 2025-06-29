<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class DaftarBeasiswa extends Controller
{
    public function beasiswa()
    {
        $beasiswa = Beasiswa::all();

        return view('beasiswa', compact('beasiswa'));
    }

    public function detail (Beasiswa $beasiswa)
    {
        $bsw = $beasiswa;
        return view('beasiswadetail', compact('bsw'));
    }

    
}
