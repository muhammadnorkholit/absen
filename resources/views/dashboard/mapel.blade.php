@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Mapel Ujian</h5>
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

                        <a class="btn btn-primary modal-trigger" style="color: white; " href="#modal2 "
                            style="color:rgb(56, 72, 124)">Tambah Data</a>
                        <!-- Modal Structure -->



                        <!-- <div id="modal2" class="modal">
                                                    <div class="modal-content">
                                                        <form action="/" enctype="multipart/form-data" method="POST">
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
                                                </div> -->
                    </div>
                    <div id="modal2 " class="modal ">
                        <div class="modal-content">
                            <form action="/mapel" method="POST">
                                @csrf
                                <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                <div class="form-group">
                                    <label for="mapel">Mapel</label>
                                    <input value="" class="form-control" name="nama_mapel" id="mapel"
                                        type="text" placeholder="Nama mapel" />
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table striped m-b-20" id="editable-datatable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Mapel</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($mapel as $m)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $m->nama_mapel }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        <a class="btn waves-effect waves-light modal-trigger red"
                                            href="#modal3 {{ $m->id }}"><i
                                                class="fa-solid fa-trash"{{ $m->id }}"></i></a>
                                        <a class="btn waves-effect waves-light modal-trigger green"
                                            href="#modal2 {{ $m->id }}"><i class="fa-solid fa-pen"></i></a>
                                    </td>

                                    {{-- edit --}}
                                    <div id="modal2 {{ $m->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/mapel/{{ $m->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                <div class="form-group">
                                                    <label for="jurusan">Mapel</label>
                                                    <input value="{{ old('mapel', $m->nama_mapel) }}" class="form-control"
                                                        name="mapel" id="jurusan" type="text"
                                                        placeholder="Nama Jurusan" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- edit --}}

                                    {{-- delete --}}
                                    <div id="modal3 {{ $m->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/mapel/{{ $m->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="form-group">
                                                    <h5 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                        mapel <b>{{ $m->nama_mapel }}</b> ?
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
@endsection
