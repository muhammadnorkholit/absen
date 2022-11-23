<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash; 

class BeritaAcaraController extends Controller
{
    public function beritaAcara(){
        $ruangan = DB::table('ruangan')->get();
        $guru = DB::table('guru')->get();
        return view('dashboard.BeritaAcara', compact('ruangan', 'guru'));
    }
}
