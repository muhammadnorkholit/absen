<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();
        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->get();
        $ruangan = DB::table('ruangan')->get();
        $admin = DB::table('users')->get();
        return view('dashboard.dashboard', compact('siswa', 'jurusan', 'guru', 'ruangan', 'admin'));
    }
}
