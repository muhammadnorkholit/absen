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
            'nama' => $row['nama'],
            'nisn' => $row['nisn'],
            'kelas' => $row['kelas'],
            'no_kelas' => $row['no_kelas'],
            'id_jurusan' => $row['id_jurusan']
        ]);
    }
}
