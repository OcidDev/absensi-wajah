<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index(){
        $data = User::all();
        // $absen = Absensi::all();

        return view('pages.laporan.index', compact('data'));
    }
}
