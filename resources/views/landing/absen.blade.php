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
            <h3 ><b>Halo,</b> </h3><br>
            {{-- <h2><b>{{$absen->nama}}</b></h2> --}}
            {{-- <h1><b>{{$nama}}</b></h1> --}}
            <h5>Pilih sesi anda : </h5>
            <form action="/ujian" method="POST">
              @csrf
              @method('put')
              <div class="buttons d-flex p-2" style="justify-content: space-evenly">
                  <button name="sesi" type="submit" class="btn btn-warning">1</button>
                  <button name="sesi" type="submit" class="btn btn-primary">2</button>
                  <button name="sesi" type="submit" class="btn btn-secondary">3</button>
              </div>
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