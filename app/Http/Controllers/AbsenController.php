<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AbsenController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
        $absen = DB::table('absen')
            ->select('absen.*', 'nama', 'nisn', 'no_kelas', 'kelas', 'jurusan', 'gender', 'ruangan')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->join('ruangan', 'absen.id_ruang', 'ruangan.id')
            ->get();
        $jurusan = DB::table('jurusan')->get();
        $ruang = DB::table('ruangan')->get();
        return view('dashboard.absen', compact('absen', 'jurusan', 'ruang'));
    }
}
