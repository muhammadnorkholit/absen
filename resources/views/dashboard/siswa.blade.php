@extends('layout.dash')

@section('content')
    <style>
        .select-dropdown {
            display: none !important;
        }

        .select2-selection {
            height: auto !important;
            border: none !important;
            border-bottom: 1px solid rgba(0, 0, 0, .5) !important;
            border-radius: 0 !important;
            padding: .4rem;
            margin-bottom: 1rem;
        }
    </style>
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0"> Data Siswa</h5>

            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
        @if (Session::has('alert'))
            <div class="alert" style="color:white;padding: 1.5rem;background:rgb(70, 187, 70);width:100%;margin:1rem">
                {{ Session::get('alert') }}</div>
        @endif
        @if (Session::has('alert2'))
            <div class="alert"
                style="color:white;padding: 1.5rem;background:rgba(174, 28, 28, 0.903);width:100%;margin:1rem">
                {{ Session::get('alert2') }}</div>
        @endif
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Filter</h5><br>
                        <form action="/filterSiswa" method="get">
                            {{-- @csrf --}}
                            <div class="col-12">
                                <div class="row">
                                    <div class="col s3">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control  js-select" name="kelas">
                                                <option value="">Pilih Disini</option>
                                                <option value="X">X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s5">
                                        <div class="form-group">
                                            <label>Pengawas Ujian</label>
                                            <select class="form-control    js-select" name="jurusan">
                                                <option value="">Pilih Disini</option>
                                                @foreach ($jurusan as $j)
                                                    <option {{ old('jurusan') == $j->id ? 'selected' : '' }}
                                                        value="{{ $j->id }}"> {{ $j->jurusan }}</option Required>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col s3">
                                        <div class="form-group">
                                            <label>No Kelas</label>
                                            <select class="form-control js-select" name="sesi">
                                                <option value="">Pilih Disini</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="3">4</option>
                                                <option value="3">5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col s1 m-t-30">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-md col-12 indigo" name="action"
                                                value="Filter">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>



        <!-- Button trigger modal -->

        @if (count($data) > 0)
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Data Siswa</h5><br>
                            <a class="btn btn-primary" href="{{ url()->full() }}&hadirsemua" type="submit">Hadirkan
                                Semua</a>
                            <div class="row m-b-20">
                            </div>
                            <div class="row" style="text-align: left;">
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Nisn</th>
                                                <th>Kelas</th>
                                                <th>Ruang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $d->nama }}</td>
                                                    <td>{{ $d->nisn }}</td>
                                                    <td>{{ $d->kelas }} {{ $d->jurusan }} {{ $d->no_kelas }}</td>
                                                    <td>{{ $d->nama_ruangan }}</td>
                                                    <td><b
                                                            style="color: rebeccapurple;font-weight: 900">{{ $d->status }}</b>
                                                    </td>


                                                    <td class="d-flex justify-content-evenly">
                                                        <a class="btn waves-effect waves-light modal-trigger"
                                                            style="color: white; background-color: skyblue"
                                                            href="#modal2 {{ $d->id_siswa }}"
                                                            style="color:rgb(56, 72, 124)"><i
                                                                class="fa-solid fa-pen"></i></a>
                                                    </td>
                                                </tr>

                                                <div id="modal2 {{ $d->id_siswa }}" class="modal ">
                                                    <div class="modal-content">
                                                        <form action="/printSiswa/{{ $d->id_siswa }}" method="POST">
                                                            @csrf
                                                            <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                            <br>
                                                            <div class="form-group">
                                                                <h4>mengubah status <b>{{ $d->nama }}</b></h4>

                                                                <label class="d-block" for="kelas">Status</label>
                                                                <div class="form-group d-flex" style="gap:20px">
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input class="with-gap" name="status"
                                                                                id="alpha" value="1" type="radio"
                                                                                checked />
                                                                            <span for="alpha">hadir</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input class="with-gap" name="status"
                                                                                id="belum hadir" value="5"
                                                                                type="radio" checked />
                                                                            <span for="alpha">belum hadir</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input class="with-gap" name="status"
                                                                                id="alpha" value="4"
                                                                                type="radio" checked />
                                                                            <span for="alpha">Alpha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input class="with-gap" name="status"
                                                                                id="sakit" value="2"
                                                                                type="radio" />
                                                                            <span for="sakit">Sakit</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input class="with-gap" name="status"
                                                                                id="ijin" value="3"
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
                                                                <button type="submit"
                                                                    class="btn btn-secondary">Ubah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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


    <script>
        const alert = document.querySelector('.alert')
        setTimeout(() => {
            alert.style.display = "none"
        }, 6000);
    </script>
@endsection
