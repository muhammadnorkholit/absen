<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{ asset('dist') }}/css/pages/dashboard1.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500;600;700&family=Finger+Paint&family=Nunito:wght@300&family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: Poppins
        }
    </style>
</head>

<body>

    <div class="row min-vh-100 justify-content-end"
        style="background-repeat: no-repeat;background-size: cover;background-image:linear-gradient(#000000ad,#000000ad), url({{ asset('bg.jpeg') }}) ">
        <div class="col-md-8 p-md-5 d-flex flex-column align-items-center justify-content-center ">
            {{-- <h1 class="text-white mt-5 pt-5 text-md-start text-center">Selamat datang <br> di aplikasi Absen Siswa --}}
            <h1 class="text-white mt-md-5 pt-md-5 display-3 font-weight-bold fw-bold p-3 text-md-start text-center">
                USPBK
                <b>
                    {{ date('Y') }}
                </b>
            </h1>

        </div>
        <div class="col-md-4 bg-white ">
            <form action="/join" class="p-md-2 px-3 pt-md-5 mt-5" method="POST">
                @csrf
                {{-- <img src="{{ asset('assets/images/satu.jpg') }}" class="gambar" style="width:40%;"> --}}
                <div class="text">
                    <h2 class="text-center"><b>Login Admin</b></h2>
                    <p class="text-center">Masuk Sebagai Admin Atau Operator</p>
                    <br>
                    <label class="form-label" for="form3Example3">Username :</label>
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" name="username" class=" py-2 form-control form-control"
                            placeholder="Masukkan username" />
                    </div>
                    <label class="form-label" for="form3Example3">password :</label>
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example3" name="password" class="py-2 form-control form-control"
                            placeholder="Masukkan password" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn w-100 py-2 btn-primary btn-sm"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="particles-js">
        <form action="/join" method="POST">
            @csrf
            <img src="{{ asset('assets/images/satu.jpg') }}" class="gambar" style="width:40%;">
            <div class="text">
                <h4 class="text-center"><b>Login Admin</b></h4>
                <br>
                <label class="form-label" for="form3Example3">Username :</label>
                <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" name="username" class="form-control form-control-lg"
                        placeholder="Masukkan username" />
                </div>
                <label class="form-label" for="form3Example3">password :</label>
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example3" name="password" class="form-control form-control-lg"
                        placeholder="Masukkan password" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-sm"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
            </div>
        </form>
    </div>
    </form>
    </div>





    <script src="{{ asset('bootstrap') }}/js/bootstrap.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('particle') }}/particles.js"></script>
    <script src="{{ asset('particle') }}/demo/js/app.js"></script>
    <script src="{{ asset('particle') }}/demo/js/lib/stats.js"></script>

</body>

</html>
