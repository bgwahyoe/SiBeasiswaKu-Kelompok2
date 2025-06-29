<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::all();
        return view('user.dashboard', compact('data'));
    }
}
