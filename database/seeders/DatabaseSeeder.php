<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\JurusanModel;
use App\Models\RuanganModel;
use App\Models\UsersModel;
use App\Models\GuruModel;
use App\Models\MapelModel;

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
  UsersModel::create([
            "username" => "tamu",
            "password" => Hash::make('bismillahtamu'),
            "role" => "tamu"
        ]);


        // UsersModel::create([
        //     "username" => "labkkpi2",
        //     "password" => Hash::make('bismillahlabkkpi2'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labkkpi3",
        //     "password" => Hash::make('bismillahlabkkpi3'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labkkpi4",
        //     "password" => Hash::make('bismillahlabkkpi4'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labakl",
        //     "password" => Hash::make('bismillahlabakl'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labotkp",
        //     "password" => Hash::make('bismillahlabotkp'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labrpl",
        //     "password" => Hash::make('bismillahlabrpl'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labmm",
        //     "password" => Hash::make('bismillahlabmm'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "lablan",
        //     "password" => Hash::make('bismillahlablan'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labwan",
        //     "password" => Hash::make('bismillahlabwan'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labkkpi5",
        //     "password" => Hash::make('bismillahlabkkpi5'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labkkpi6",
        //     "password" => Hash::make('bismillahlabkkpi6'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labpkm",
        //     "password" => Hash::make('bismillahlabpkm'),
        //     "role" => "teknisi"
        // ]);
        // UsersModel::create([
        //     "username" => "labbdp",
        //     "password" => Hash::make('bismillahlabbdp'),
        //     "role" => "teknisi"
        // ]);



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

	//   GuruModel::create([
    //         "guru" => "SUCI YUNIATI, S.Sos"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "DITA AGENG DEWANTI, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "HENDRO SETYONO, S.Kom"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "SITI MUDTRIKATUL UMAY"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "SITI HASANAH BOLKIAH, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "DENI PUTRA PRATAMA, S"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "M. RIZQI HENDRIAN PRATAMA, S.Kom"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ANNIK DWI SUDARWATIK, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "LINGGA ADHI PRAJA, ST, MM"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ZAKIYAH ILMI DARJAH, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "SIFAUL MUNAWAROH, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "BAMBANG EKO WITJAKSONO, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "MOHAMMAD RIDWAN SAIDI, S.Pd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "LEYSA GIATRI KIRANA, S.Psi."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "TRIANA HERI WIBOWO, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "VETY WULANDARI, SPd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ACHMAD MUZAKKI, S.Pd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ARIF SUBAGYO, S.Pd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "SITI CHOLIFAH, S.Pd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ACHMAD SOEGIANTO, S.Pd."
    //     ]);
	//   GuruModel::create([
    //         "guru" => "Dra. FENNY"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "HA'IMRON, S.Pd.I"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "DWI ATIKA FITRININGTIYAS, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "RUSLAN HASIM, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "DIMAS RISKYANTO, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "AGUNG ROSARYA ELINDA, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "RUFI INDRIANTI, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "MEYTHA SURYANINGTARI, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "MUHAMMAD SALEH, S.Sn"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "DWI AYULIANDARI, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "ARIEF DWI FEBRIANTO, S.Pd"
    //     ]);
	//   GuruModel::create([
    //         "guru" => "RICO ARDANANDA, S.Ds."
    //     ]);












    // MapelModel::create([
    //        "nama_mapel" => "Administrasi Infrastruktur Jaringan	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Administrasi Pajak"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Administrasi Sistem jaringan	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Administrasi Transaksi	s"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Administrasi Umum	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Akuntansi Dasar"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Akuntansi Keuangan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Akuntansi Perbankan dan Keuangan Mikro"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Animasi"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => ""
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Aplikasi Pengolah Angka/Spreadsheet"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Bahasa Indonesia"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Bahasa Inggris"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Bahasa Jawa	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Bahasa Madura"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Basis Data"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Bisnis Online"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Dasar Desain Grafis"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Dasar Seni Audio Visual"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Dasar – dasar Kreatifitas"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Desain Grafis Percetakan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Editing"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Editing Audio dan Video	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Ekonomi Bisnis"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Etika Profesi"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Fisika"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "IPA"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Kearsipan "
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Kimia"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Komputer Akuntansi"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Komputer dan Jaringan Dasar	"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Komunikasi bisnis"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Komunikasi Massa"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Korespondensi"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Layanan Lembaga Perbankan dan Keuangan Mikro"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Manajemen Produksi, Naskah dan Penyutradaraan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Marketing"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Matematika"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Otomatisasi Tata Kelola Humas dan Keprotokolan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Otomatisasi Tata Kelola Kepegawaian"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Otomatisasi Tata Kelola Keuangan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Otomatisasi Tata Kelola Sarana dan Prasarana"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "P. Akuntansi Per Jasa Dagang dan Manufaktur"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pemodelan Perangkat Lunak"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pemrograman Berorientasi Obyek"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pemrograman Dasar"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pemrograman Web dan Perangkat Bergerak"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Penataan Produk"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pendidikan Agama dan Budi Pekerti"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pendidikan Agama Katolik"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pendidikan Agama Kristen"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pendidikan Jasmani, Olah Raga, dan Kesehatan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pendidikan Pancasila dan Kewarganegaraan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pengelolaan Bisnis Ritel"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Pengelolaan Kas"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Perbankan Dasar"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Perencanaan Bisnis"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Praktikum Akuntansi Lembaga/Instansi Pemerintah"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Produk Kreatif dan Kewirausahaan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Produksi Audio Visual"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Sejarah Indonesia"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Seni Budaya"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Simulasi dan Komunikasi Digital"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Sistem Komputer"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Tata Artistik"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Tata Kamera"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Tata Kamera, Pencahayaan dan Tata Suara"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Tata Suara"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Teknik animasi 2D dan 3D"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Teknologi jaringan Berbasis Luas (WAN)"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Teknologi layanan Jaringan"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Teknologi Perkantoran"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Tinjauan Seni"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Visual Effect"
    //      ]);
    // MapelModel::create([
    //        "nama_mapel" => "Permodelan Perangkat Lunak dan Game"
    //      ]);



    }
}
