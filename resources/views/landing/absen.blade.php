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
            <h6>Halo, </h6>
            <h4><b>{{$data->nama}}</b></h4>
            
            <br>
            {{-- <h1><b>{{$nama}}</b></h1> --}}
            <h5>Pilih sesi anda : </h5>
            {{-- @dd(Auth::id()) --}}
            <form action="/ujian/{{Auth::id()}}" method="POST">
              @csrf
              @method('put')
              
              <div class="form-group d-flex" style="gap:20px">
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $data->sesi == '1' ? 'checked' : '' }}
                                                                class="with-gap" name="sesi" id="no1"
                                                                value="1" type="radio" checked />
                                                            <span for="no1">1</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $data->sesi == '2' ? 'checked' : '' }}
                                                                class="with-gap" name="sesi" id="no2"
                                                                value="2" type="radio" />
                                                            <span for="no2">2</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $data->sesi == '3' ? 'checked' : '' }}
                                                                class="with-gap" name="sesi" id="no3"
                                                                value="3" type="radio" />
                                                            <span for="no3">3</span>
                                                        </label>
                                                    </div>
              </div> <br>
                                                {{-- ruang --}}
                                                <div class="form-group">
                                                    <label class="d-block" for="kelas">Pilih Ruangan</label>
                                                    <select class="form-control" id="kelas" name="ruangan">
                                                        @foreach ($ruang as $r)
                                                            <option value="{{ $r->id }}">
                                                                {{ $r->no_ruangan }} {{ $r->nama_ruangan }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                {{-- ruang --}}
              </div>
                                                <br>  
              <button class="btn btn-primary" type="submit">submit</button>
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