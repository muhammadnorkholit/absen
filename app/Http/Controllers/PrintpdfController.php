<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\printsiswaModel;
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

    public function printSiswaUi()
    {
        return view('dashboard.printSiswa');
    }

    public function filter()
    {
        $kls = request()->kelas;
        $jrsn = request()->jurusan;
        $nkls = request()->no_kelas;

        return view('pemilihan.printSiswa', [
            'pemilih' => printsiswaModel::join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->join('siswa', 'absen.id_siswa', 'siswa.id')
                ->where('kelas', $kls)
                ->where('jurusan', $jrsn)
                ->where('no_kelas', $nkls)
                ->get(),
            'jurusan' => DB::table('pemilihan')->get(),
        ]);
    }
}
 