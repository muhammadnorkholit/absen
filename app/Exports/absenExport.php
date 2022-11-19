<?php

namespace App\Exports;

use App\Invoice;
use App\Models\absen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AbsenExport implements FromView
{
    public function view(): View
    {
        return view('export.absenExport', [
            'data' => absen::join('siswa', 'absen.id_siswa', 'siswa.id')
                ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->get(),
        ]);
    }
}
