@extends('layout.dash')

@section('content')
    <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Siswa</h5>
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
                                    {{-- <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Import Excel</a> --}}
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <form method="POST" action="/siswa">
                                                    @csrf
                                                    <h3><b>Tambah data</b></h3>
                                                    <div class="modal-body">
                                                        <div class="sbp-preview">
                                                            <div class="sbp-preview-content">
                                                                <div class="form-group">
                                                                    <label class="d-block" for="nama">Nama</label>
                                                                    <input name="nama" value="{{ old('nama') }}" class="form-control"
                                                                        id="nama" type="text" placeholder="Nama" />
                                                                    @error('nama')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="d-block" for="nisn">Nisn</label>
                                                                    <input name="nisn" value="{{ old('nisn') }}" class="form-control"
                                                                        id="nisn" type="number" placeholder="Masukkan nisn" />
                                                                    @error('nisn')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="d-block" for="kelas">Pilih kelas</label>
                                                                    <select class="form-control" id="kelas" name="jurusan">
                                                                        @foreach ($kelas as $ks)
                                                                            <option value="{{ $ks->id }}">{{ $ks->kelas }}
                                                                                {{ $ks->jurusan }} {{ $ks->no_kelas }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('kelas')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        {{-- <div id="modal2" class="modal">
                                            <div class="modal-content">
                                                <form method="POST" enctype="multipart/form-data" action="/siswaimport">
                                                    @csrf
                                                    <h3><b>Import</b></h3>
                                                    <div class="modal-body">
                                                        <div class="sbp-preview">
                                                            <div class="sbp-preview-content">
                                                                <div class="form-group">
                                                                    <label for="">File Excel</label>
                                                                    <input type="file" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> --}}


                                    <button type="button" class="btn btn-secondary">Import pdf</button>
                                    </div>
                                    <div id="editable-datatable_filter" class="dataTables_filter"><input type="search" class="" placeholder="cari" aria-controls="editable-datatable"></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nisn</th>
                                                <th>Kelas</th>
                                                <th>jurusan</th>
                                                <th>no kelas</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ?>
                                            @foreach ($siswa as $s)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$s->nama}}</td>
                                                    <td>{{$s->nisn}}</td>
                                                    <td>{{$s->kelas}}</td>
                                                    <td>{{$s->jurusan}}</td>
                                                    <td>{{$s->no_kelas}}</td>
                                                    <td class="d-flex justify-content-evenly">
                                                        <a class="waves-effect waves-light modal-trigger" style="color: red"><i class="fa-solid fa-trash" href="#modal3 {{ $s->id }}"></i></a>
                                                        <a class="waves-effect waves-light modal-trigger" href="#modal2 {{ $s->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                    </td>
                                                    {{-- edit --}}
                                                    <div id="modal2 {{ $s->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form method="POST" action="/siswa">
                                                                @csrf
                                                                <h3><b>Ubah Data</b></h3>
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="sbp-preview">
                                                                        <div class="sbp-preview-content">
                                                                            <div class="form-group">
                                                                                <label class="d-block" for="nama">Nama</label>
                                                                                <input name="nama" value="{{ old('nama') }}" class="form-control"
                                                                                    id="nama" type="text" placeholder="Nama" />
                                                                                @error('nama')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="d-block" for="nisn">Nisn</label>
                                                                                <input name="nisn" value="{{ old('nisn') }}" class="form-control"
                                                                                    id="nisn" type="number" placeholder="Masukkan nisn" />
                                                                                @error('nisn')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="d-block" for="kelas">Pilih kelas</label>
                                                                                <select class="form-control" id="kelas" name="kelas">
                                                                                    @foreach ($kelas as $ks)
                                                                                        <option value="{{ $ks->id }}">{{ $ks->kelas }}
                                                                                            {{ $ks->jurusan }} {{ $ks->no_kelas }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('kelas')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit">ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- edit --}}

                                                    {{-- delete --}}
                                                    <div id="#modal3 {{ $s->id }}" class="modal ">
                                                        <div class="modal-content">
                                                            <form action="/jurusan/{{ $s->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            <div class="form-group">
                                                                <p class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                                    jurusan {{ $s->jurusan }} ?
                                                                </p>
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
