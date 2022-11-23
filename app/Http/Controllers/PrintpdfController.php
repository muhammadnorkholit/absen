<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\printsiswaModel;
use App\Exports\AbsenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class PrintpdfController extends Controller
{
    public function index()
    {
        return view('dashboard.print');
    }

    public function print()
    {
        $html =  view('dashboard.printpdf');

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

    public function printSiswaUi(Request $request)
    {
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
        $data = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*', 'nisn', 'nama', 'no_kelas', 'kelas', 'jurusan')
            // ->where('absen.id', '=', $request->filter)
            ->get();

        $jurusan = DB::table('jurusan')->get();
        return view('dashboard.printSiswa', compact(['jurusan', 'data']));
    }

    public function filter(Request $request)
    {
        $absen = printsiswaModel::all();

        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
        $data = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->where('absen.kelas no_kelas jurusan', $request->filter)
            ->get();


        if ($request->filter == "all") {
            $datas = DB::table('absen')
                ->join('siswa', 'absen.id_siswa', 'siswa.id')
                ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->select('absen.*', 'nisn', 'no_kelas', 'kelas', 'jurusan')
                ->get();
        }
        return view('pemilihan.printSiswa', compact('absen', 'siswa', [
            "datas" => $data,
            "absen" => $absen,
            "no" => $no = 1
        ]));

        $kls = request()->kelas;
        $jrsn = request()->jurusan;
        $nkls = request()->no_kelas;

        $print = DB::table('absen')->get();

        return view('pemilihan.printSiswa', [
            'absen' => printsiswaModel::join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->join('siswa', 'absen.id_siswa', 'siswa.id')
                ->where('kelas', $kls)
                ->where('jurusan', $jrsn)
                ->where('no_kelas', $nkls)
                ->get(),
            'jurusan' => DB::table('pemilihan')->get(),

        ]);
    }

    // export siswa
    public function export(Request $request)
    {
        return Excel::download(new absenExport, 'absenSiswa.xlsx');
    }
}
