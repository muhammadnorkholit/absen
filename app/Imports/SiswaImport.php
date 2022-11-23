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
        $jrsn = strtoupper(str_replace(' ', '', $row['jurusan']));
        $id = 0;
        $jurusan = DB::table('jurusan')->get();

        for ($i = 0; $i < count($jurusan); $i++) {
            $jr = strtoupper(str_replace(' ', '', $jurusan[$i]->jurusan));

            if ($jr === $jrsn) {
                $id = $jurusan[$i]->id;
                DB::table('siswa')->insert([
                    'nama' => $row['nama'],
                    'nisn' => ($row['nisn']),
                    'kelas' => $row['kelas'],
                    'no_kelas' => $row['no_kelas'],
                    'gender' => $row['gender'],
                    'id_jurusan' => $id
                ]);
                // echo " jurusan " . $jr . " \n " . $jrsn;

            } else {
                // echo " uraaaaa ";
                // return;
            }
        }
    }
}
