<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash; 
use PDF;

class BeritaAcaraController extends Controller
{
    public function beritaAcara(Request $request){

        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
            // dd($request);
        $data = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('siswa.kelas', $request->kelas)
            ->orWhere('siswa.no_kelas', $request->no_kelas)
            ->orWhere('jurusan.jurusan', $request->jurusan)
            ->get();
        $waktu = DB::table('waktu')->get();

        $ruangan = DB::table('ruangan')->get();
        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->get();
        $mapel = DB::table('mapel')->get();
        return view('dashboard.BeritaAcara', compact('jurusan', 'data', 'guru', 'ruangan', 'mapel' ,'waktu'));
    }

    public function printBerita(Request $request){
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->join('ruangan', 'siswa.id_ruangan', 'ruangan.id')
            ->get();
            // dd($request);
            $all = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->join('ruangan', 'siswa.id_ruangan', 'ruangan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan', 'nama_ruangan', 'no_ruangan', 'teknisi', 'sesi')
            ->where('siswa.id_ruangan', $request->ruangan)
            ->where('siswa.sesi', $request->sesi)

            // ->groupBy('siswa.id')
            ->count();
             $hadir = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('siswa.id_ruangan', $request->ruangan)
            ->where('siswa.sesi', $request->sesi)
            // ->groupBy('siswa.id'
            ->count();

            $all1 = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->join('ruangan', 'siswa.id_ruangan', 'ruangan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan', 'nama_ruangan', 'no_ruangan', 'teknisi', 'sesi')
            ->where('siswa.id_ruangan', $request->ruangan)
            ->where('siswa.sesi', $request->sesi);

            $hadir1 = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('siswa.id_ruangan', $request->ruangan)
            ->where('siswa.sesi', $request->sesi);


        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->where('id',Request()->guru)->first();
        $mapel = DB::table('mapel')->where('id',Request()->mapel)->first();
        $waktu = DB::table('waktu')->where('id',Request()->waktu)->first();
        $ruang = DB::table('ruangan')->where('id',Request()->ruangan)->first();

        // return view('dashboard.printpdf',compact('ruang','guru','all','hadir'));
        $pdf = Pdf::loadview('dashboard.printpdf',compact('ruang','guru','all','hadir', 'all1', 'mapel', 'waktu'));
        $pdf->setPaper('A4','portrait');
        return $pdf->download($ruang->nama_ruangan.'.pdf');
    }
}
