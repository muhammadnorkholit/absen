<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ujian</title>

    
  </head>
  <body style="background-color: skyblue"><br><br><br>  
    <div class="jumbotron m-auto mt-5 jumbotron-fluid" style="width:300px; background-color: white; border-radius: 20px; padding:50px;" >
        <div class="container">
            
            <br>
            {{-- <h1><b>{{$nama}}</b></h1> --}}
            
            {{-- @dd(Auth::id()) --}}
            <form action="/ujian/{{Auth::id()}}" method="POST">
              @csrf
              @method('put')
              
              <div class="form-group d-flex" style="gap:20px">
                <h6>Selamat Datang, </h6>
                <h5><b>{{$data->nama}}</b></h5>
                <h6>Sudah siap ujian??</h6>
              </div>
                                                <br>  
              <button class="btn btn-primary" type="submit">Siap</button>
            </form>
        </div>
    </div>
   
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>