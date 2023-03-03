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

        $month = date('m');
        if($month <= '06'){
            $tahun = date('Y',strtotime("-1 Year"))."/".date('Y');;
            $semester = "ganjil";
        }else{
             $tahun = date('Y')."/".date('Y',strtotime("+1 year"));
            $semester = "genap";
        }

        $id_Ajaran = DB::table('tahun_ajaran')->where('tahun',$tahun)->where('semester',$semester)->first()->id;
        if(!$id_Ajaran)return;

        DB::table('siswa')->insert([
            'nama' =>  $row['nama'],
            'nisn' => $row['nisn'],
            'kelas' => $row['kelas'],
            'no_kelas' => $row['no_kelas'],
            'id_ruangan' => $row['ruangan'],
            'sesi' => $row['sesi'],
            'id_jurusan' => $id,
            'id_ajaran'=>$id_Ajaran
        ]);
    }
}
