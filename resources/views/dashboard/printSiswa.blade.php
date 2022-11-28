@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Print Data Siswa</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Filter</h5><br>
                                <form action="/printSiswa" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>kelas</label>
                                                    <select class="form-control" name="kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="X">X</option>
                                                        <option value="XI">XI</option>
                                                        <option value="XII">XII</option>
                                                    </select>
                                                </div>
                                            </div>                            
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>No Kelas</label>
                                                    <select class="form-control" name="no_kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s7">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <select class="form-control" name="jurusan">
                                                        <option value="">Pilih Disini</option>
                                                       @foreach ($jurusan as $j)
                                                            <option value="{{ $j->jurusan }}">  {{ $j->jurusan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-md col-12 indigo" name="action" value="Filter">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row m-t-40" style="text-align: left;">
                                    <div class="col ">                        
                                        <a href="/exportAbsen" class="btn teal mb-3">Export Data Siswa</a>                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Button trigger modal -->


            @if(count($data) >= 0)
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Data Siswa</h5><br>
                                    <div class="row m-b-20">
                                    </div>
                                    <div class="row" style="text-align: left;">
                                        <div class="table-responsive">
                                        <table class="table striped m-b-20" id="editable-datatable">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                 @foreach($data as $d)
                                                    <tr>
                                                        <td>{{ $no++}}</td>
                                                        <td>{{ $d->nama}}</td>
                                                        <td>{{ $d->kelas }} {{ $d->jurusan }} {{ $d->no_kelas }}</td>

                                                        <td>
                                                           
                                                                <a href="/{{$d->id}}"><button class="btn  {{$d->status == 'hadir' ? 'btn-primary' : ($d->status == 'ijin'? 'btn-success':'btn-second') }} btn-sm"> {{$d->status == 'hadir'?'ini hadir':$d->status == 'ijin'?'ini ijin':$d->status == 'sakit'?'sakit':'belum hadir'}}</button></a>
                                                            </td>     
                                                        <td class="d-flex justify-content-evenly">
                                                            <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: skyblue" href="#modal2 {{ $d->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                        </td>     
                                                    </tr>

                                                     {{-- edit --}}
                                                    {{-- <div id="modal2{{ $d->id }}" class="modal">
                                                        <div class="modal-content">
                                                            <form action="/printSiswa/{{ $d->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                                    <br>
                                                                <div class="form-group">
                                                                    <h4>mengubah status <b>{{$d->nama}}</b></h4>
                                                                        
                                                                         <label class="d-block" for="kelas">Status</label>
                                                                            <div class="form-group d-flex" style="gap:20px">
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="alpha" value="1"
                                                                                            type="radio" checked />
                                                                                        <span for="alpha">Alpha</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="sakit" value="2"
                                                                                            type="radio" />
                                                                                        <span for="sakit">Sakit</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="ijin" value="3"
                                                                                            type="radio" />
                                                                                        <span for="ijin">Ijin</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            @error('')
                                                                                <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                </div>
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div> --}}
                                                    <div id="modal2 {{ $d->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/printSiswa/{{ $d->id }}" method="POST">
                                                                    @csrf
                                                                    <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                                    <br>
                                                                <div class="form-group">
                                                                    <h4>mengubah status <b>{{$d->nama}}</b></h4>
                                                                        
                                                                         <label class="d-block" for="kelas">Status</label>
                                                                            <div class="form-group d-flex" style="gap:20px">
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="alpha" value="4"
                                                                                            type="radio" checked />
                                                                                        <span for="alpha">Alpha</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="sakit" value="2"
                                                                                            type="radio" />
                                                                                        <span for="sakit">Sakit</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <label>
                                                                                        <input class="with-gap" name="status" id="ijin" value="3"
                                                                                            type="radio" />
                                                                                        <span for="ijin">Ijin</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            @error('')
                                                                                <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                </div>
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- edit --}}

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            @endif

            </div>
@endsection