<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new siswa([
            'nama' => $row[1],
            'nisn' => $row[2],
            'kelas' => $row[3],
            'no_kelas' => $row[4],
            'id_jurusan' => $row[5]
        ]);
    }
}
