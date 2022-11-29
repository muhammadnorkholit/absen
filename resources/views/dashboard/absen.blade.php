@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Absen Siswa</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="card">
                    <div class="card-content">
                                <h5 class="card-title">Filter</h5><br>
                                <form action="/printSiswa" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Ruangan</label>
                                                    <select class="form-control" name="nama_ruangan">
                                                    <option value="">Pilih Disini</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>                            
                                            <div class="col s">
                                                <div class="form-group">
                                                    <label>Sesi</label>
                                                    <select class="form-control" name="sesi">
                                                    <option value="">Pilih Disini</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="col s7">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <select class="form-control" name="jurusan">
                                                        <option value="">Pilih Disini</option>
                                                       @foreach ($jurusan as $j)
                                                            <option value="{{ $j->jurusan }}">  {{ $j->jurusan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-md col-12 indigo" name="action" value="Filter">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            
                <div class="row">
                    <div class="card">
                            <div class="card-content">
                                <div class="header d-flex justify-content-between">
                                    <div class="button">
                                        <!-- Modal Structure -->

                                    </div>   
                                    <div id="zero_config_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="cari" aria-controls="zero_config"></label></div>    
                                </div>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama </th>
                                                <th>Nisn </th>
                                                <th>Kelas </th>
                                                <th>Waktu </th>
                                                <th>Sesi</th>
                                                <th>Ruang</th>
                                                <th>Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ?>
                                            @foreach ($absen as $ab)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$ab->nama}}</td>
                                                    <td>{{$ab->nisn}}</td>
                                                    <td>{{$ab->kelas}} {{$ab->jurusan}} {{$ab->no_kelas}}</td>
                                                    <td>{{$ab->waktu}}</td>
                                                    <td>{{$ab->sesi}}</td>
                                                    <td>{{$ab->no_ruangan}} {{$ab->nama_ruangan}}</td>
                                                    <td>
                                                        <a class="btn btn-succesd">{{$ab->status}}</a>
                                                    </td>
                                                   
                                                    

                                                    {{-- delete --}}
                                                    <div id="#modal3 {{ $ab->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/jurusan/{{ $ab->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- delete --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
                
            </div>
@endsection