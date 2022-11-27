<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;

class SiswaImport implements ToModel, WithHeadingRow
{
    public function __construct(Type $var = null) {
    $this->no  = 1;
    }
    public function model(array $row)
    {
        $jrsn = strtoupper($row['jurusan']);
        $id = 0;

        $id_jurusan = DB::table('jurusan')->where('jurusan',$jrsn)->first();

        if($id_jurusan != null){
            $id = $id_jurusan->id;
        }else{
            $id = 0;
        }

        DB::table('siswa')->insert([
            'nama' =>  $row['nama'],
            'nisn' => $row['nisn'],
            'kelas' => $row['kelas'],
            'no_kelas' => $row['no_kelas'],
            'id_ruangan' => $row['ruangan'],
            'sesi' => $row['sesi'],
            'id_jurusan' => $id
        ]);
    }
}
