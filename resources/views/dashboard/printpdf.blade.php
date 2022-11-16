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
            display: flex;
            align-items: center;
            flex-direction: column
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
            display: block;
            margin: auto;
            text-align: center
        }

        .content {
            margin-top: 1rem;
        }

        .content p {
            margin-bottom: 7px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="logobu.png" width="80px">
        <h5>PEMERINTAH PROVINSI JAWA TIMUR br <br>
            DINAS PENDIDIKAN</h5>
        <h4>SEKOLAH MENENGAH KEJURUAN NEGERI 1 <br>
            BONDOWOSO
        </h4>
        <p>Jalan HOS. Cokroaminoto No.110 / (0332) 431201 E-mail : smkn1_bws@yahoo.com
        </p>
    </div>
    <div class="body">
        <h4 style="text-align: center;margin-top:1rem">BERITA ACARA <br>
            PENYELENGGARAAN UJIAN AKHIR SEMESTER GANJIL <br>
            TAHUN PELAJARAN 2022/2023
        </h4>
        <div class="content">
            <p>Pada hari ini {{ date('d-m-y') }}.</p>
            <p>Telah diselenggarakan UJIAN AKHIR SEMESTER GANJIL (UAS GANJIL) dari pukul $ s/d pukul $</p>
            <br>
            <p>Di sekolah : SMK NEGERI 1 BONDOWOSO </p>
            <p>Alamat : Jalan HOS. Cokroaminoto No.110 Bondowoso</p>
            <p>Ruang : $ </p>
            <p>Mata Ujian : $ </p>
            <p>Jumlah Peserta : $ </p>
            <p>Seharusnya : $ Orang</p>
            <p>Yang Hadir : $ Orang</p>
            <p>Yang Tidak Hadir : $ Orang, yakni nomor : <br><br>
                ………………………………………………………………………………………………………………… <br><br>
                ………………………………………………………………………………………………………………… <br><br>
            </p>

            <p> ⦁ Catatan selama pelaksanaan UJIAN AKHIR SEMESTER GANJIL (UAS GANJIL). <br><br>
                ………………………………………………………………………………………………………………… <br><br>
                ………………………………………………………………………………………………………………… <br><br>
                ………………………………………………………………………………………………………………… <br><br>
            </p>
            <p>Berita Acara ini dibuat dengan sesungguhnya.</p> <br>

            <p>Yang membuat Berita Acara</p><br>

            <div style="display: flex;justify-content: space-between">
                <div class="tanda" style="text-align: center">
                    <p> pengawas,</p><br><br><br><br>
                    _____________________ <br>
                    NIP.
                </div>
                <div class="tanda" style="text-align: center">
                    <p> Teknisi,</p><br><br><br><br>
                    _____________________ <br>
                    NIP.
                </div>
            </div>
        </div>
    </div>
</body>

</html>