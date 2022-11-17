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
                                <form action="/filpemilihan" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>kelas</label>
                                                    <select class="form-control" name="kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>                            
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>No</label>
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
                                                            <option value="{{ $j->jurusan }}">
                                                                {{ $j->jurusan }}</option>
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
                                        <a href="/filsemua" class="btn teal mb-3">Semua</a>                      
                                    </div>
                                    <div class="col ">                        
                                        <a href="/" class="btn teal mb-3">Export Peserta</a>                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @if(count() > 0) --}}
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Data Siswa</h5><br>
                                    <div class="row m-b-20">
                                        <div class="col ">                        
                                            <a href="/" class="btn teal mb-3">Pdf</a>                      
                                        </div>
                                        <div class="col ">                        
                                            <a href="/" class="btn teal mb-3">Excel</a>                      
                                        </div>
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
                                                 @foreach($print as $data)
                                                    <tr>
                                                        <td>{{ $no}}</td>
                                                        <td>{{ $data->kelas }} {{ $data->jurusan }} {{ $data->no_kelas }}</td>     
                                                        <td>{{ $data->status }}</td>
                                                        @if(($data->status) == "hadir")                                            
                                                        <td>
                                                            <a href="/{{$data->id}}"><button class="btn btn-primary btn-sm">Hadir</button></a>
                                                        </td>                                            
                                                        @endif
                                                         @if(($data->status) == "null")                                            
                                                        <td>
                                                            <a href="/{{$data->id}}"><button class="btn btn-danger btn-sm">Alpha</button></a>
                                                            <a href="/{{$data->id}}"><button class="btn btn-sm" style="background-color: greenyellow;" >Ijin</button></a>
                                                            <a href="/{{$data->id}}"><button class="btn btn-sm" style="background-color: darkcyan" >Sakit</button></a>
                                                        </td>                                            
                                                        @endif                                 
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endif --}}
            </div>
@endsection