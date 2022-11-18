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
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2" style="background-color: grey; color:white;">Import Excel</a>
                        <a class="waves-effect waves-light btn modal-trigger" href="/siswaexport" style="background-color: grey; color:white;">Export Excel</a>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <form action="/siswa" method="POST">
                                    @csrf
                                    <h3 style="text-align: center"><b>Tambah Data</b></h3>

                                    <div class="form-group">
                                        <label class="d-block" for="password">nama</label>
                                        <input name="nama" value="{{ old('nama') }}" class="form-control"
                                            id="password" type="text" placeholder="Masukkan nama" />
                                        @error('')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="d-block" for="password">nisn</label>
                                        <input name="nisn" value="{{ old('nisn') }}" class="form-control"
                                            id="password" type="number" placeholder="Masukkan nisn" />
                                        @error('')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <label class="d-block" for="kelas">Kelas</label>
                                    <div class="form-group d-flex" style="gap:20px">
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="kelas" id="kelas1" value="x"
                                                    type="radio" checked />
                                                <span for="kelas1">x</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="kelas" id="kelas2" value="xi"
                                                    type="radio" />
                                                <span for="kelas2">xi</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="kelas" id="kelas3" value="xii"
                                                    type="radio" />
                                                <span for="kelas3">xii</span>
                                            </label>
                                        </div>
                                    </div>
                                    @error('')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    <div class="form-group">
                                        <label class="d-block" for="kelas">Pilih Jurusan</label>
                                        <select class="form-control" id="kelas" name="jurusan">
                                            @foreach ($jurusan as $j)
                                                <option value="{{ $j->id }}">
                                                    {{ $j->jurusan }}</option>
                                            @endforeach
                                        </select>
                                        @error('')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <label class="d-block" for="kelas">No Kelas</label>
                                    <div class="form-group d-flex" style="gap:20px">
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="no_kelas" id="no1" value="1"
                                                    type="radio" checked />
                                                <span for="no1">1</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="no_kelas" id="no2" value="2"
                                                    type="radio" />
                                                <span for="no2">2</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="no_kelas" id="no3" value="3"
                                                    type="radio" />
                                                <span for="no3">3</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="no_kelas" id="no4" value="4"
                                                    type="radio" />
                                                <span for="no4">4</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="no_kelas" id="no5" value="5"
                                                    type="radio" />
                                                <span for="no5">5</span>
                                            </label>
                                        </div>
                                    </div>
                                    @error('')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label class="d-block" for="gender">Gender</label>
                                    <div class="form-group d-flex" style="gap:20px">
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="gender" id="l" value="l"
                                                    type="radio" checked />
                                                <span for="L">Laki Laki</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <label>
                                                <input class="with-gap" name="gender" id="p" value="p"
                                                    type="radio" />
                                                <span for="p">Perempuan</span>
                                            </label>
                                        </div>
                                    </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Tambah data</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal2" class="modal">
                                            <div class="modal-content">
                                                <form action="/siswaimport" enctype="multipart/form-data" method="POST">
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
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Nisn</th>
                                                <th>Kelas</th>
                                                <th>No Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Gender</th>
                                                <th>Action</th>
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
                                                    <td>{{$s->no_kelas}}</td>
                                                    <td>{{$s->jurusan}}</td>
                                                    <td>{{$s->gender}}</td>
                                                    <td class="d-flex justify-content-evenly m-2">
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: red" href="#modal3 {{ $s->id }}"><i class="fa-solid fa-trash" "></i></a>
                                                        <a class="btn waves-effect waves-light modal-trigger" style="color: white; background-color: skyblue"href="#modal2 {{ $s->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                    </td>
                                                    {{-- edit --}}
                                                    <div id="modal2 {{ $s->id }}" class="modal ">

                                        <div class="modal-content">
                                            <form action="/siswa" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h3 style="text-align: center"><b>Ubah Data</b></h3>

                                                <div class="form-group">
                                                    <label class="d-block" for="password">nama</label>
                                                    <input name="nama" value={{ $s->nama }} class="form-control"
                                                        id="password" type="text" placeholder="Masukkan nama" />
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="d-block" for="password">nisn</label>
                                                    <input name="nisn" value={{ $s->nisn }} class="form-control"
                                                        id="password" type="number" placeholder="Masukkan nisn" />
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <label class="d-block" for="kelas">Kelas</label>
                                                <div class="form-group d-flex" style="gap:20px">
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->kelas == 'X' ? 'checked' : '' }}
                                                                class="with-gap" name="kelas" id="kelas1"
                                                                value="x" type="radio" />
                                                            <span for="kelas1">x</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->kelas == 'XI' ? 'checked' : '' }}
                                                                class="with-gap" name="kelas" id="kelas2"
                                                                value="xi" type="radio" />
                                                            <span for="kelas2">xi</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->kelas == 'XII' ? 'checked' : '' }}
                                                                class="with-gap" name="kelas" id="kelas3"
                                                                value="xii" type="radio" />
                                                            <span for="kelas3">xii</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                @error('kelas')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <div class="form-group">
                                                    <label class="d-block" for="kelas">Pilih Jurusan</label>
                                                    <select class="form-control" id="kelas" name="jurusan">
                                                        @foreach ($jurusan as $j)
                                                            <option value="{{ $j->id }}">
                                                                {{ $j->jurusan }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('kelas')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <label class="d-block" for="kelas">No Kelas</label>
                                                <div class="form-group d-flex" style="gap:20px">
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->no_kelas == '1' ? 'checked' : '' }}
                                                                class="with-gap" name="no_kelas" id="no1"
                                                                value="1" type="radio" checked />
                                                            <span for="no1">1</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->no_kelas == '2' ? 'checked' : '' }}
                                                                class="with-gap" name="no_kelas" id="no2"
                                                                value="2" type="radio" />
                                                            <span for="no2">2</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->no_kelas == '3' ? 'checked' : '' }}
                                                                class="with-gap" name="no_kelas" id="no3"
                                                                value="3" type="radio" />
                                                            <span for="no3">3</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->no_kelas == '4' ? 'checked' : '' }}
                                                                class="with-gap" name="no_kelas" id="no4"
                                                                value="4" type="radio" />
                                                            <span for="no4">4</span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <label>
                                                            <input {{ $s->no_kelas == '5' ? 'checked' : '' }}
                                                                class="with-gap" name="no_kelas" id="no5"
                                                                value="5" type="radio" />
                                                            <span for="no5">5</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                    <label class="d-block" for="gender">Gender</label>
                                                    <div class="form-group d-flex" style="gap:20px">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input {{ $s->gender == 'l' ? 'checked' : ''}} class="with-gap" name="gender" id="l" value="l"
                                                                    type="radio" checked />
                                                                <span for="L">Laki Laki</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input {{ $s->gender == 'p' ? 'checked' : ''}} class="with-gap" name="gender" id="p" value="p"
                                                                    type="radio" />
                                                                <span for="p">Perempuan</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @error('')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">ubah data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- edit --}}

                                    {{-- delete --}}
                                    <div id="modal3 {{ $s->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/siswa/{{ $s->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="form-group">
                                                    <h4 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                        siswa <b>{{ $s->nama }}</b> ?
                                                    </h4>
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
