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
            ->select('absen.*', 'nama', 'nisn', 'no_kelas', 'kelas', 'sesi', 'jurusan', 'nama_ruangan', 'no_ruangan')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->join('ruangan', 'siswa.id_ruangan', 'ruangan.id')
            ->get();
        $jurusan = DB::table('jurusan')->get();

        $ruangan = DB::table('ruangan')->get();
        return view('dashboard.absen', compact('absen', 'jurusan','ruangan'));
    }
    public function store(Request $request)
    {
            $request->validate([
                'sesi'=>'required',
                'ruangan'=>'required',
            ]);
        $siswa =  DB::table('siswa')
        ->select('siswa.*')
            ->where('id_ruangan',$request->ruangan)
            ->where('sesi',$request->sesi)
            ->get();

            $ada = DB::table('absen')
            ->where('absen.id_siswa',$siswa[0]->id)
            ->whereDate('absen.waktu',date('Y-m-d'))
            ->count()
            ;
            // dd($ada);

            if($ada == 0){

            foreach ($siswa as $r ) {
                DB::table('absen')->insert([
                    'id_siswa'=>$r->id,
                    'status'=>5
                ]);
            }

            return  redirect('/siswaSemua')->with('alert', 'Ruangan berhasil di siapkan');
            }
            else{
            return  redirect('/siswaSemua')->with('alert2', 'Ruangan Sudah Terdaftar');
            }


    }
}
