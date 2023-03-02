<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

        }

        section {
            margin: auto;

        }

        h1,
        h2,
        h3,
        p {
            margin: 0
        }

        p {
            font-size: 11px
        }

        .header {
            display: flex;
            text-align: center;
            margin: auto;
            position: relative;
            align-items: center;
            justify-content: center;
        }


        .header .text {
            width: 70%;
        }

        .content {
            margin-top: 1rem;
            width: 70%;
            margin: 0 auto;
        }

        .content p {
            margin-bottom: 7px;
        }
    </style>
</head>

<body>
    <section>
        <div class="header">
            <div class="img" style="display: inline-block">
                <img src="https://seeklogo.com/images/J/jawa-timur-logo-24818906D1-seeklogo.com.png" width="80px">
            </div>  

            <div class="text" style="display: inline-block">
                <h5>PEMERINTAH PROVINSI JAWA TIMUR<br>
                    DINAS PENDIDIKAN</h5>
                <h4>SEKOLAH MENENGAH KEJURUAN NEGERI 1 <br>
                    BONDOWOSO
                </h4>
                <p>Jalan HOS. Cokroaminoto No.110 / (0332) 431201 E-mail : smkn1_bws@yahoo.com
                </p>
                <hr>
            </div>
        </div>
        <div class="body">
            <h5 style="text-align: center;  padding-left: 75px;">BERITA ACARA <br>
                PENYELENGGARAAN UJIAN AKHIR SEMESTER GANJIL <br>
                TAHUN PELAJARAN 2022/2023
            </h5>
            <div class="content">
                <p>Pada hari ini, pada tanggal {{ date('d-m-y') }}.</p>
                <p>Telah diselenggarakan UJIAN AKHIR SEMESTER GANJIL (UAS GANJIL) dari pukul {{$waktu->waktu_awal}} s/d pukul {{$waktu->waktu_akhir}}
                </p>
                <br>
                <p>Di sekolah : SMK NEGERI 1 BONDOWOSO </p>
                <p>Alamat : Jalan HOS. Cokroaminoto No.110 Bondowoso</p>
                <p>Ruang : {{$ruang->nama_ruangan}} </p>
                <p>Mata Ujian : {{$mapel1->nama_mapel}} {{($mapel2 ? ' - '.     $mapel2->nama_mapel:'')}}</p>
                <p>Jumlah Peserta : {{$all}} Orang</p>
                <p>Seharusnya : {{$all}} Orang</p>
                <p>Yang Hadir : {{$hadir}} Orang</p>
                <p>Yang Tidak Hadir : {{$all - $hadir}} Orang, yakni : <br><br>
                  

                <p> ⦁ Catatan selama pelaksanaan UJIAN AKHIR SEMESTER GANJIL (UAS GANJIL). <br><br>
                    ………………………………………………………………………………………………………………… <br><br>
                    ………………………………………………………………………………………………………………… <br><br>
                    ………………………………………………………………………………………………………………… <br><br>
                </p>
                <p>Berita Acara ini dibuat dengan sesungguhnya.</p> <br>

                <p>Yang membuat Berita Acara</p><br>

                <div style="justify-content:space-between ; ">
                    <div class="tanda" style="text-align: center; float:left ;">
                        <p> pengawas,</p><br><br>
                        _____________________ <br>
                        <p>NIP. {{$guru->guru}}</p>
                    </div>
                    <br>
                    <div class="tanda" style="text-align: center;float:right; margin-left:20px; padding-left:20px ; margin-top:-18px;">
                        <p> Teknisi,</p><br><br>
                        _____________________ <br>
                        <p>NIP. {{$ruang->teknisi}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>