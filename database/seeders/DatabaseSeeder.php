<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\JurusanModel;
use App\Models\RuanganModel;
use App\Models\UsersModel;
use App\Models\GuruModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // UsersModel::create([
        //     "username" => "admin123",
        //     "password" => Hash::make('bismillah123'),
        //     "role" => "admin"
        // ]);



//         UsersModel::create([
//             "username" => "labkkpi2",
//             "password" => Hash::make('bismillahlabkkpi2'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labkkpi3",
//             "password" => Hash::make('bismillahlabkkpi3'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labkkpi4",
//             "password" => Hash::make('bismillahlabkkpi4'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labakl",
//             "password" => Hash::make('bismillahlabakl'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labotkp",
//             "password" => Hash::make('bismillahlabotkp'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labrpl",
//             "password" => Hash::make('bismillahlabrpl'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labmm",
//             "password" => Hash::make('bismillahlabmm'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "lablan",
//             "password" => Hash::make('bismillahlablan'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labwan",
//             "password" => Hash::make('bismillahlabwan'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labkkpi5",
//             "password" => Hash::make('bismillahlabkkpi5'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labkkpi6",
//             "password" => Hash::make('bismillahlabkkpi6'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labpkm",
//             "password" => Hash::make('bismillahlabpkm'),
//             "role" => "teknisi"
//         ]);
//         UsersModel::create([
//             "username" => "labbdp",
//             "password" => Hash::make('bismillahlabbdp'),
//             "role" => "teknisi"
//         ]);



//         JurusanModel::create([
//             "jurusan" => "REKAYASA PERANGKAT LUNAK"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "AKUNTANSI"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "MULTIMEDIA"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "TEKNIK JARINGAN DAN KOMPUTER"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "BISNIS DARING"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "DESAIN KOMUNIKASI VISUAL"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "LAYANAN PERBANKAN"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "MANAJEMEN PERKANTORAN"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "PRODUKSI DAN SIARAN PROGRAM TELEVISIK"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "AKUNTANSI DAN KEUANGAN LEMBAGA"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "BISNIS DARING DAN PEMASARAN"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "OTOMATISASI DAN TATA KELOLA PERKANTORAN"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "PERBANKAN DAN KEUANGAN MIKRO"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "PRODUKSI FILM"
//         ]);

//         JurusanModel::create([
//             "jurusan" => "DESAIN KOMUNIKASI VISUAL"
//         ]);

//         RuanganModel::create([
//             "nama_ruangan" => "LAB KKPI2",
//             "no_ruangan" => "1",
//             "teknisi" => "ILHAM"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB KKPI3",
//             "no_ruangan" => "2",
//             "teknisi" => "ANDI"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB KKPI4",
//             "no_ruangan" => "3",
//             "teknisi" => "RENDI"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB AKL",
//             "no_ruangan" => "4",
//             "teknisi" => "MU'ID"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB OTKP",
//             "no_ruangan" => "5",
//             "teknisi" => "YESI"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB RPL",
//             "no_ruangan" => "6",
//             "teknisi" => "DENI"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB MM",
//             "no_ruangan" => "7",
//             "teknisi" => "JUNED"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB LAN",
//             "no_ruangan" => "8",
//             "teknisi" => "BAGUS"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB WAN",
//             "no_ruangan" => "9",
//             "teknisi" => "TIO"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB KKPI5",
//             "no_ruangan" => "10",
//             "teknisi" => "SAMSUL"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB KKPI6",
//             "no_ruangan" => "11",
//             "teknisi" => "SALEH"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB PKM",
//             "no_ruangan" => "12",
//             "teknisi" => "YUNI"
//         ]);
//         RuanganModel::create([
//             "nama_ruangan" => "LAB BDP",
//             "no_ruangan" => "13",
//             "teknisi" => "SULE"
//         ]);
//         GuruModel::create([
//             "guru" => "Drs. MALIK, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "Dra. YAYUK SULISTYOWATI"
//         ]);
// GuruModel::create([
//             "guru" => "Drs. DIDIK CAHYONO"
//         ]);
// GuruModel::create([
//             "guru" => "Drs. SUPRIYADI"
//         ]);
// GuruModel::create([
//             "guru" => "AGUS WAHYUDI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "MOHAMAD AKSAN, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ENNY YURAIDA, S. Pd .MM"
//         ]);
// GuruModel::create([
//             "guru" => "EKO WAHYUDIANTO, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "Drs. DWI ARIANTO, MM"
//         ]);
// GuruModel::create([
//             "guru" => "WIYONO, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "SRI PURWATI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "MIMIK SURIPMIYATI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "HANIFAH HAMZAH, S.Kom"
//         ]);
// GuruModel::create([
//             "guru" => "IKA PUJI RAHAYU, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "PRABANDARI BUDIYARTI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "SRI HASTUTI, SE"
//         ]);
// GuruModel::create([
//             "guru" => "DWI ANDRI HANDAYANI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "INDAH NURHAYATI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ELLY FLORIDA, S.S"
//         ]);
// GuruModel::create([
//             "guru" => "SITI ANY MAYA SHULHAH, S.Sn, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ABDUR RASID, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "CITRIA NILAM ASRI CIPTO WIJAYA, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "NANANG DANI RASIDI, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ANING RETNO SUSANTI, S.E, MM, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "DIAN KURNIAWAN, S.Sn"
//         ]);
// GuruModel::create([
//             "guru" => "NUR RAKHMI FAJRIYAH, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "DINI TRIANA ARIMAMI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "YETTI AGUS KARTIKAWATI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "JUNIAWAN SETIANTO, S.Si"
//         ]);
//         GuruModel::create([
//             "guru" => "JUNIAWAN SETIANTO, S.Si"
//         ]);
// GuruModel::create([
//             "guru" => "LINA, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ROFIATUL FAUZIAH, M.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "CHERIE NUGRAHENI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "NANANG KRISTANTO, SE"
//         ]);
// GuruModel::create([
//             "guru" => "AHMAD HAMAM AL FADIL, S.Ag"
//         ]);
// GuruModel::create([
//             "guru" => "NETTY SRIWIYANTI, SE"
//         ]);
// GuruModel::create([
//             "guru" => "OFRIDANINGSIH, S.AB"
//         ]);
// GuruModel::create([
//             "guru" => "AW. HENDRO PUTUT W., S.Sn"
//         ]);
// GuruModel::create([
//             "guru" => "NANANG SLAMET EKO APRILIANTO, S.Sn"
//         ]);
// GuruModel::create([
//             "guru" => "SISWA WARDANI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "NURKHAEFI ALVIAH, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "MEILIDA ARGITASARI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "NUTRIYO, S.ST"
//         ]);
// GuruModel::create([
//             "guru" => "MOCH. YUSUF, S.E"
//         ]);
// GuruModel::create([
//             "guru" => "RIBUT PAIDI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "HENDRA KURNIAWAN, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "INDHIROH FITRIANDINI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "ARIF FIRMANSYAH, ST, S.Sn"
//         ]);
// GuruModel::create([
//             "guru" => "AKHMAD SALEHUDIN, S.Ag."
//         ]);
// GuruModel::create([
//             "guru" => "LINDA RATNASARI, S.Pd."
//         ]);
// GuruModel::create([
//             "guru" => "MOH. GHANDY YUDHA, S.Pd.I"
//         ]);
// GuruModel::create([
//             "guru" => "NUNING EVANA, S.Pd."
//         ]);
// GuruModel::create([
//             "guru" => "IDHA DAROJATIN, S.Pd."
//         ]);
// GuruModel::create([
//             "guru" => "PEPI WICAKSONO ARAN DARMAWANSYAH, S.Sos"
//         ]);
// GuruModel::create([
//             "guru" => "MURSID, S.Kom"
//         ]);
// GuruModel::create([
//             "guru" => "ABDI RAHMAN AFANDI, S.Pd"
//         ]);
// GuruModel::create([
//             "guru" => "MUHAMMAD ABRORI, S.PdI"
//         ]);

    }
}
