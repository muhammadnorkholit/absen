@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Guru</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>  

            {{-- link --}}
             <div class="container-fluid">
                 <div class="card">
                            <div class="card-content">
                                <div class="header d-flex justify-content-between">
                                     <div class="button">
                                            <!-- Modal Structure -->
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal2" style="background-color: grey; color:white;">Import Excel</a>
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                                            <div id="modal1" class="modal">
                                                <div class="modal-content">
                                                    <form action="/guru" method="POST">
                                                        @csrf
                                                        <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                                    <div class="form-group">
                                                        <label for="link">Nama Guru :</label>
                                                        <input value="" class="form-control" name="guru"
                                                            id="link" type="text" placeholder="masukkan link" />
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
                                    <div id="editable-datatable_filter" class="dataTables_filter"></div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Guru</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ?>
                                            @foreach ($guru as $g)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$g->guru}}</td>
                                                    <td class="d-flex justify-content-evenly">
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: red" href="#modal3 {{ $g->id }}"><i class="fa-solid fa-trash"{{ $g->id }}"></i></a>
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: skyblue" href="#modal2 {{ $g->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                    </td>
                                            
                                                    {{-- edit --}}
                                                    <div id="modal2 {{ $g->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/lainnya/{{ $g->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                                <div class="form-group">
                                                                    <label for="jurusan">Nama Guru</label>
                                                                    <input value="{{ $g->guru }}" class="form-control" name="link"
                                                                        id="link" type="text" placeholder="" />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- edit --}}

                                                    {{-- delete --}}
                                                    <div id="modal3 {{ $g->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/lainnya/{{ $g->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            <div class="form-group">
                                                                <h5 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                                    link <b>{{ $g->guru }}</b> ?
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