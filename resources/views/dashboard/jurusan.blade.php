@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Jurusan</h5>
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
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Import Excel</a>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                        <!-- Modal Structure -->

                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <form action="/jurusan" method="POST">
                                    @csrf
                                    <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <input value="{{ old('jurusan') }}" class="form-control" name="jurusan"
                                            id="jurusan" type="text" placeholder="Nama Jurusan" />
                                        @error('jurusan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Tambah data</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <form action="/jurusanimport" enctype="multipart/form-data" method="POST">
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
                    <!-- <div id="editable-datatable_filter" class="dataTables_filter"><input type="search" class="" placeholder="cari" aria-controls="editable-datatable"></div> -->
                </div>
                <div class="table-responsive">
                    <table class="table striped m-b-20" id="editable-datatable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($jurusan as $jur)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jur->jurusan }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        <a class="btn waves-effect waves-light modal-trigger red"
                                            href="#modal3 {{ $jur->id }}"><i
                                                class="fa-solid fa-trash"{{ $jur->id }}"></i></a>
                                        <a class="btn waves-effect waves-light green modal-trigger"
                                            href="#modal2 {{ $jur->id }}"><i class="fa-solid fa-pen"></i></a>
                                    </td>

                                    {{-- edit --}}
                                    <div id="modal2 {{ $jur->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/jurusan/{{ $jur->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                <div class="form-group">
                                                    <label for="jurusan">Jurusan</label>
                                                    <input value="{{ old('jurusan', $jur->jurusan) }}" class="form-control"
                                                        name="jurusan" id="jurusan" type="text"
                                                        placeholder="Nama Jurusan" />
                                                    @error('jurusan')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- edit --}}

                                    {{-- delete --}}
                                    <div id="modal3 {{ $jur->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/jurusan/{{ $jur->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="form-group">
                                                    <h5 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                        jurusan <b>{{ $jur->jurusan }}</b> ?
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
