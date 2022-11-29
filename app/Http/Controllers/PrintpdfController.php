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

        $html =  view('dashboard.printpdf' );

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
                ->select('siswa.*', 'jurusan', 'nama_ruangan')
                ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->join('ruangan', 'siswa.id_ruangan', 'ruangan.id')
                ->get();
            $data = [];
            // dd($data);
            
            $jurusan = DB::table('jurusan')->get();
            $ruang = DB::table('ruangan')->get();
            return view('dashboard.printSiswa', compact('jurusan', 'data', 'ruang'));
    }

    public function filter(Request $request)
    {
        $absen = printsiswaModel::all();
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
            // dd($request);
        $data = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan','siswa.id as id_siswa', 'sesi', 'nama_ruangan')
            ->where('siswa.kelas', $request->kelas)
            ->Where('siswa.no_kelas', $request->no_kelas)
            ->Where('jurusan.jurusan', $request->jurusan)
            ->get();

        $jurusan = DB::table('jurusan')->get();
        $ruang = DB::table('ruangan')->get();
        return view('dashboard.printSiswa', compact('jurusan', 'data','ruang'));
    }

    // export siswa
    public function export(Request $request)
    {
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'jurusan')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
            // dd($request);
        $data = DB::table('absen')
            ->join('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan','sesi')
            // ->where('siswa.kelas', $request->kelas)
            // ->where('siswa.no_kelas', $request->no_kelas)
            // ->where('jurusan.jurusan', $request->jurusan)
            ->get();
            
        $jurusan = DB::table('jurusan')->get();
        $ruang = DB::table('ruangan')->get();
        $guru = DB::table('guru')->get();
        // dd($data);
        // dd($ruang);
        return Excel::download(new absenExport($request->waktu), 'absenSiswa.xlsx');
    }

    // update status
    public function printSiswa(Request $request,$id)
    {
        $request->validate(
            [
                'status' => 'required'
            ],
            [
                'status.required' => 'status wajib di isi'
            ]
        );

                DB::table('absen')->insert([
                'id_siswa' =>$id,
                "status" => $request->status,
            ]);
     

        return redirect('/printSiswaUi')->with('success', 'status berhasil di edit');
    }
}
