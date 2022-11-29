<?php

namespace App\Exports;

use App\Invoice;
use App\Models\absen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class AbsenExport implements FromView
{
     function __construct($waktu) {
        $this->waktu = $waktu;
 }
    public function view(): View
    {
        $data = DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas', 'jurusan')
            ->get();

        return view('export.absenExport', [
            'ruang'=> DB::table('ruangan')->get(),
            'data' => DB::table('absen')
            ->rightJoin('siswa', 'absen.id_siswa', 'siswa.id')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->whereDate('absen.waktu',$this->waktu)
            ->select('absen.*','nama', 'nisn', 'no_kelas', 'kelas','id_jurusan', 'jurusan','sesi','id_ruangan')
            ->get(),
            'jurusan'=>DB::table('jurusan')->get()
        ]);
    }
}
