<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script nonce="c2329c23-f20e-4f69-8e14-abdd50d1b159">
        (function(w, d) {
            ! function(e, f, g, h) {
                e.zarazData = e.zarazData || {};
                e.zarazData.executed = [];
                e.zaraz = {
                    deferred: [],
                    listeners: []
                };
                e.zaraz.q = [];
                e.zaraz._f = function(i) {
                    return function() {
                        var j = Array.prototype.slice.call(arguments);
                        e.zaraz.q.push({
                            m: i,
                            a: j
                        })
                    }
                };
                for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
                e.zaraz.init = () => {
                    var l = f.getElementsByTagName(h)[0],
                        m = f.createElement(h),
                        n = f.getElementsByTagName("title")[0];
                    n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
                    e.zarazData.x = Math.random();
                    e.zarazData.w = e.screen.width;
                    e.zarazData.h = e.screen.height;
                    e.zarazData.j = e.innerHeight;
                    e.zarazData.e = e.innerWidth;
                    e.zarazData.l = e.location.href;
                    e.zarazData.r = f.referrer;
                    e.zarazData.k = e.screen.colorDepth;
                    e.zarazData.n = f.characterSet;
                    e.zarazData.o = (new Date).getTimezoneOffset();
                    if (e.dataLayer)
                        for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                                ...s[1],
                                ...t[1]
                            }))))) zaraz.set(r[0], r[1], {
                            scope: "page"
                        });
                    e.zarazData.q = [];
                    for (; e.zaraz.q.length;) {
                        const u = e.zaraz.q.shift();
                        e.zarazData.q.push(u)
                    }
                    m.defer = !0;
                    for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith(
                        "_zaraz_"))).forEach((w => {
                        try {
                            e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
                        } catch {
                            e.zarazData["z_" + w.slice(7)] = v.getItem(w)
                        }
                    }));
                    m.referrerPolicy = "origin";
                    m.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
                    l.parentNode.insertBefore(m, l)
                };
                ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
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
            <p>Pada hari ini $ tanggal $ bulan $ tahun dua ribu dua puluh dua.</p>
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
