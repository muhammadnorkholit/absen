<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <title>Login</title>
  </head>
  <body>

      <div id="particles-js">
        <form action="/masuk" method="POST" >
                  @csrf
                <img src="{{asset('assets/images/satu.jpg')}}" class="gambar">
                <div class="text">
                  <h4><b>Login</b></h4>
                <p>Login Untuk Absen dan lanjut mengikuti ujian</p>
                <div class="form-outline mb-3">
                  <input type="number" id="form3Example3" name="nisn" class="form-control form-control-lg"
                    placeholder="Masukkan NISN anda" />
                </div>
                <div class="text-center text-lg-start">
                  <button type="submit" class="btn btn-primary btn-sm"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
                </div>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('particle')}}/particles.js"></script>
    <script src="{{asset('particle')}}/demo/js/app.js"></script>
    <script src="{{asset('particle')}}/demo/js/lib/stats.js"></script>
  </body>
</html>