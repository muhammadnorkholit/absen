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
        <form action="/join" method="POST" >
                @csrf
              <img src="{{asset('assets/images/satu.jpg')}}" class="gambar">
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
              </div>
        </form>
      </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>