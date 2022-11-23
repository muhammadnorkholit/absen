<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\JurusanModel;

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

        JurusanModel::create([
            "jurusan" => "REKAYASA PERANGKAT LUNAK"
        ]);

        JurusanModel::create([
            "jurusan" => "AKUNTANSI"
        ]);

        JurusanModel::create([
            "jurusan" => "MULTIMEDIA"
        ]);

        JurusanModel::create([
            "jurusan" => "TEKNIK JARINGAN DAN KOMPUTER"
        ]);

        JurusanModel::create([
            "jurusan" => "BISNIS DARING"
        ]);

        JurusanModel::create([
            "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        ]);

        JurusanModel::create([
            "jurusan" => "LAYANAN PERBANKAN"
        ]);

        JurusanModel::create([
            "jurusan" => "MANAJEMEN PERKANTORAN"
        ]);

        JurusanModel::create([
            "jurusan" => "PRODUKSI DAN SIARAN PROGRAM TELEVISIK"
        ]);

        JurusanModel::create([
            "jurusan" => "AKUNTANSI DAN KEUANGAN LEMBAGA"
        ]);

        JurusanModel::create([
            "jurusan" => "BISNIS DARING DAN PEMASARAN"
        ]);

        JurusanModel::create([
            "jurusan" => "OTOMATISASI DAN TATA KELOLA PERKANTORAN"
        ]);

        JurusanModel::create([
            "jurusan" => "PERBANKAN DAN KEUANGAN MIKRO"
        ]);

        JurusanModel::create([
            "jurusan" => "PRODUKSI FILM"
        ]);

        JurusanModel::create([
            "jurusan" => "DESAIN KOMUNIKASI VISUAL"
        ]);
    }
}
