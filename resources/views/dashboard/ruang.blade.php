@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Ruangan Ujian</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="/dashboard" class="breadcrumb">Home</a>
                        <a href="/dashboard" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>

            {{-- link --}}
             <div class="container-fluid">
                 <div class="card">
                            <div class="card-content">
                                <div class="header d-flex justify-content-between"> 
                                        <div class="button">
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                                            <!-- Modal Structure -->
                                            <div id="modal1" class="modal">
                                                <div class="modal-content">
                                                    <form action="/ruangan" method="POST">
                                                        @csrf
                                                        <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                                    <div class="form-group">
                                                        <label for="jurusan">Nama Ruangan :</label>
                                                        <input value="" class="form-control" name="nama_ruangan"
                                                            id="nama_ruangan" type="text" placeholder="nama ruangan" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jurusan">No Ruangan :</label>
                                                        <input value="" class="form-control" name="no_ruangan"
                                                            id="nama_ruangan" type="number" placeholder="no ruangan" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jurusan">Teknisi :</label>
                                                        <input value="" class="form-control" name="teknisi"
                                                            id="teknisi" type="text" placeholder="nama teknisi" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">Tambah data</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div id="modal2" class="modal">
                                                <div class="modal-content">
                                                    <form action="/ruanganimport" enctype="multipart/form-data" method="POST">
                                                        @csrf
                                                        <h3 style="text-align: center"><b>Import Excel</b></h3>
                                                        <div class="form-group">
                                                        <input type="file" name="file" required="required">
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">import</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>            
                                    <div id="editable-datatable_filter" class="dataTables_filter"><input type="search" class="" placeholder="cari" aria-controls="editable-datatable"></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Ruangan</th>
                                                <th>No Ruangan</th>
                                                <th>Teknisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ?>
                                            @foreach ($ruang as $r)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$r->nama_ruangan}}</td>
                                                    <td>{{$r->no_ruangan}}</td>
                                                    <td>{{$r->teknisi}}</td>
                                                    <td class="d-flex justify-content-evenly">
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: red" href="#modal3 {{ $r->id }}"><i class="fa-solid fa-trash"{{ $r->id }}"></i></a>
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: skyblue" href="#modal2 {{ $r->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a> 
                                                    </td>
                                            
                                                    {{-- edit --}}
                                                    <div id="modal2 {{ $r->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/ruangan/{{ $r->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                                <div class="form-group">
                                                                    <label for="jurusan">Nama Ruangan</label>
                                                                    <input value="{{ $r->nama_ruangan }}" class="form-control" name="nama_ruangan"
                                                                        id="nama_ruangan" type="text" placeholder="" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jurusan">No Ruangan</label>
                                                                    <input value="{{ $r->no_ruangan }}" class="form-control" name="no_ruangan"
                                                                        id="no_ruangan" type="number" placeholder="" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jurusan">Nama Teknisi</label>
                                                                    <input value="{{ $r->teknisi }}" class="form-control" name="teknisi"
                                                                        id="no_ruangan" type="text" placeholder="" />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- edit --}}

                                                    {{-- delete --}}
                                                    <div id="modal3 {{ $r->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/ruangan/{{ $r->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            <div class="form-group">
                                                                <h5 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                                    ruangan <b>{{ $r->nama_ruangan }}</b> ?
                                                                </h5>
                                                            </div>
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
            {{-- akhir link --}}
@endsection