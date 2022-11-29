<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\JurusanModel;
use App\Models\RuanganModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "admin1",
            "password" => Hash::make('bismillahsungguh')
        ]);

        // JurusanModel::create([
        //     "jurusan" => "REKAYASA PERANGKAT LUNAK"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "AKUNTANSI"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "MULTIMEDIA"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "TEKNIK JARINGAN DAN KOMPUTER"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "BISNIS DARING"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "LAYANAN PERBANKAN"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "MANAJEMEN PERKANTORAN"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "PRODUKSI DAN SIARAN PROGRAM TELEVISIK"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "AKUNTANSI DAN KEUANGAN LEMBAGA"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "BISNIS DARING DAN PEMASARAN"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "OTOMATISASI DAN TATA KELOLA PERKANTORAN"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "PERBANKAN DAN KEUANGAN MIKRO"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "PRODUKSI FILM"
        // ]);

        // JurusanModel::create([
        //     "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        // ]);

        // RuanganModel::create([
        //     "nama_ruangan" => "kkpi3",
        //     "no_ruangan" => "1",
        //     "teknisi" => "andi"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "kkpi4",
        //     "no_ruangan" => "2",
        //     "teknisi" => "ilham"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "akl",
        //     "no_ruangan" => "3",
        //     "teknisi" => "muid"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "otkp",
        //     "no_ruangan" => "4",
        //     "teknisi" => "yesi"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "mm",
        //     "no_ruangan" => "5",
        //     "teknisi" => "juned"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "rpl",
        //     "no_ruangan" => "6",
        //     "teknisi" => "deni"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "lab lan",
        //     "no_ruangan" => "7",
        //     "teknisi" => "bagus"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "lab wan",
        //     "no_ruangan" => "8",
        //     "teknisi" => "ali akbar"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "kkpi5",
        //     "no_ruangan" => "9",
        //     "teknisi" => "samsul"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "kkpi6",
        //     "no_ruangan" => "10",
        //     "teknisi" => "saleh"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "pkm",
        //     "no_ruangan" => "11",
        //     "teknisi" => "yuni"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "lab bdp",
        //     "no_ruangan" => "12",
        //     "teknisi" => "slamet"
        // ]);
        // RuanganModel::create([
        //     "nama_ruangan" => "lab datau",
        //     "no_ruangan" => "13",
        //     "teknisi" => "Kholit"
        // ]);
    }
}
