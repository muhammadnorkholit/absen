<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $sesi = "1";

        if(Request()->sesi != null){
            $sesi = Request()->sesi;
        }

        $siswa = DB::table('siswa')->get();
        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->get();
        $ruangan = DB::table('ruangan')->get();
        $admin = DB::table('users')->get();

        $absen = DB::table('absen')
        ->join('siswa','absen.id_siswa','siswa.id')
        ->whereDate('absen.waktu',date('Y-m-d'))
        ->where('sesi',$sesi)
        ->get();
        return view('dashboard.dashboard', compact('siswa', 'jurusan', 'guru', 'ruangan', 'admin','absen','sesi'));
    }
}
