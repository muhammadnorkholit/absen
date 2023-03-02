<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{ asset('dist') }}/css/pages/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500;600;700&family=Finger+Paint&family=Nunito:wght@300&family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
        rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            font-family: Poppins
        }
    </style>
</head>

<body>

    {{-- <div id="particles-js">
    </div> --}}
    <div>
        <div class="row min-vh-100 justify-content-end"
            style="background-repeat: no-repeat;background-size: cover;background-image:linear-gradient(#000000ad,#000000ad), url({{ asset('bg.jpeg') }}) ">
            <div class="col-md-8 p-5 d-flex flex-column ">
                {{-- <h1 class="text-white mt-5 pt-5 text-md-start text-center">Selamat datang <br> di aplikasi Absen Siswa --}}
                </h1>
            </div>
            <div class="col-md-4 bg-white ">
                <form action="/masuk" class="p-2 pt-5 mt-5" method="POST">
                    @csrf
                    <div class="text">
                        <h4><b>Login</b></h4>
                        <p>Login Untuk Hadir dan lanjut mengikuti ujian</p>

                        <div class="form-outline">
                            <input type="text" id="form3Example3" name="nisn" class="py-2 form-control "
                                placeholder="Masukkan NISN anda" />
                        </div>
                        @if (session('alert'))
                            <small class="text-danger" style="padding:0;margin:0;">{{ session('alert') }}</small>
                        @endif
                        <div class="text-center text-lg-start mt-3">
                            <button type="submit" class="btn d-block w-100 py-2 btn-primary btn-sm"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap') }}/js/bootstrap.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('particle') }}/particles.js"></script>
    <script src="{{ asset('particle') }}/demo/js/app.js"></script>
    <script src="{{ asset('particle') }}/demo/js/lib/stats.js"></script>
</body>

</html>
