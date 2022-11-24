<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash; 

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
        $ruangan = DB::table('ruangan')->get();
        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->get();
        return view('dashboard.BeritaAcara', compact('jurusan', 'data', 'guru', 'ruangan', ));
    }

    public function printBerita(Request $request){
         $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
            // dd($request);
            $all = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('siswa.kelas', $request->kelas)
            ->orWhere('siswa.no_kelas', $request->no_kelas)
            ->orWhere('jurusan.jurusan', $request->jurusan)
            // ->groupBy('siswa.id')
            ->count();
             $hadir = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('siswa.kelas', $request->kelas)
            ->orWhere('siswa.no_kelas', $request->no_kelas)
            ->orWhere('jurusan.jurusan', $request->jurusan)
            // ->groupBy('siswa.id')
            ->count();
            

        $jurusan = DB::table('jurusan')->get();
        $guru = DB::table('guru')->first();
        $ruang = DB::table('ruangan')->first();

        $html =  view('dashboard.printpdf',compact('ruang','guru','all','hadir') );

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render('dashboard.printpdf');

        // Output the generated PDF to Browser
        $dompdf->stream('dashboard.printpdf');
        // return view('dashboard.printpdf');
    }
}
