<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "password" => Hash::make('sungguhben')
        ]);

        // jurusan::create([
        //     "jurusan" => "REKAYASA PERANGKAT LUNAK"
        // ]);

        // jurusan::create([
        //     "jurusan" => "AKUNTANSI"
        // ]);

        // jurusan::create([
        //     "jurusan" => "MULTIMEDIA"
        // ]);

        // jurusan::create([
        //     "jurusan" => "TEKNIK JARINGAN DAN KOMPUTER"
        // ]);

        // jurusan::create([
        //     "jurusan" => "BISNIS DARING"
        // ]);

        // jurusan::create([
        //     "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        // ]);

        // jurusan::create([
        //     "jurusan" => "LAYANAN PERBANKAN"
        // ]);

        // jurusan::create([
        //     "jurusan" => "MANAJEMEN PERKANTORAN"
        // ]);

        // jurusan::create([
        //     "jurusan" => "PRODUKSI DAN SIARAN PROGRAM TELEVISIK"
        // ]);

        // jurusan::create([
        //     "jurusan" => "AKUNTANSI DAN KEUANGAN LEMBAGA"
        // ]);

        // jurusan::create([
        //     "jurusan" => "BISNIS DARING DAN PEMASARAN"
        // ]);

        // jurusan::create([
        //     "jurusan" => "OTOMATISASI DAN TATA KELOLA PERKANTORAN"
        // ]);

        // jurusan::create([
        //     "jurusan" => "PERBANKAN DAN KEUANGAN MIKRO"
        // ]);

        // jurusan::create([
        //     "jurusan" => "PRODUKSI FILM"
        // ]);

        // jurusan::create([
        //     "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        // ]);
    }
}
