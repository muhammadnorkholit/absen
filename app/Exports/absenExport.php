<?php

namespace App\Exports;

use App\Invoice;
use App\Models\absen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class AbsenExport implements FromView
{
    public function view(): View
    {
        return view('export.absenExport', [
            'ruang'=> DB::table('ruangan')->get(),
            'data' => absen::join('siswa', 'absen.id_siswa', 'siswa.id')
                ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->get(),
        ]);
    }
}
