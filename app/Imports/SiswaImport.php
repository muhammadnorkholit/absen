<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;

class SiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $jrsn = strtoupper($row['jurusan ']);

        $id_jurusan = DB::table('jurusan')->where('jurusan', $jrsn)->first('id');

        if ($id_jurusan == null) {
            $id = 0;
        } else {
            $id = $id_jurusan->id;
        }


        DB::table('siswa')->insert([
            'nama' => $row['nama'],
            'nisn' => $row['nisn'],
            'kelas' => $row['kelas'],
            'no_kelas' => $row['no_kelas'],
            'gender' => $row['gender'],
            'id_jurusan' => intval($id),
        ]);
    }
}
