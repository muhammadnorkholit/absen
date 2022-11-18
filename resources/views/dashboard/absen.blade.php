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
                                <div class="header d-flex justify-content-between">
                                    <div class="button">
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <form action="/jurusan" method="POST">
                                                    @csrf
                                                    
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Tambah data</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
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
                                                <th>Sesi </th>
                                                <th>Status </th>
                                                <th>Action</th>
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
                                                    <td>
                                                        <a class="btn btn-succesd">{{$ab->status}}</a>
                                                    </td>
                                                    <td class="d-flex justify-content-evenly">
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: red"><i class="fa-solid fa-trash" href="#modal3 {{ $ab->id }}"></i></a>
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: skyblue" href="#modal2 {{ $ab->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                    </td>
                                                    {{-- edit --}}
                                                    <div id="modal2 {{ $ab->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/jurusan/{{ $ab->id }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn" style="background-color:red ;"> alpha </button>
                                                                <button class="btn" style="background-color:gray ;"> ijin </button>
                                                                <button class="btn" style="background-color: yellowgreen ;"> sakit </button>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-secondary">Ubah</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- edit --}}

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
@endsection