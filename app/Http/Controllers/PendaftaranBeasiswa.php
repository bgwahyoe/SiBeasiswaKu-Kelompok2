<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranBeasiswa extends Controller
{
    public function formpendaftaran(Beasiswa $beasiswa)
    {
        $bsw = $beasiswa;
        $id = $beasiswa->id;
        return view('formpendaftaran', compact(['bsw', 'id']));
    }
    public function daftar(Request $request, int $id)
    {
        $request->validate([
           'berkas' => 'required|mimes:pdf|max:10048',
           'motivasi' => 'required',
        ]);

        $path = $request->file('berkas')->store('berkas_pendaftaran', 'public');


        Pendaftaran::create([
            'user_id' => Auth::id(),
            'beasiswa_id' => (int) $id,
            'berkas' => $path,
            'motivasi' => $request->motivasi
        ]);


        return redirect('/user/dashboard')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
