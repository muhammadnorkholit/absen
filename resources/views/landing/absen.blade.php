{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('style.css')}}">

    <title>Ujian</title>

    
  </head>
  <body>
    <div class="vh-100">

        <form action="/ujian/{{Auth::id()}}" method="POST">
            @csrf
            <img src="{{asset('assets/images/satu.jpg')}}" class="gambar">
            <div class="text">
                <h6>Sudah siap Ujian??</h6>
                <h4><b>{{$data->nama}}</b></h4>
                <button class="btn btn-primary btn-sm" type="submit">Lanjutkan Ujian</button>
            </div>
        </form>
    </div>
   
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html> --}}


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
        <form action="/ujian/{{Auth::id()}}" method="POST">
            @csrf
            <img src="{{asset('assets/images/satu.jpg')}}" class="gambar">
            <div class="text">
                <h6>Sudah siap Ujian??</h6>
                <h4><b>{{$data->nama}}</b></h4>
                <button class="btn btn-primary btn-sm" type="submit">Lanjutkan Ujian</button>
            </div>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('particle')}}/particles.js"></script>
    <script src="{{asset('particle')}}/demo/js/app.js"></script>
    <script src="{{asset('particle')}}/demo/js/lib/stats.js"></script>
  </body>
</html>