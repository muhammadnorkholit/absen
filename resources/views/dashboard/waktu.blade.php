@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Waktu Ujian</h5>
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


                        <a class="btn waves-effect waves-light modal-trigger" href="#modal2 ">Tambah Data</a>
                        <!-- Modal Structure -->

                        <div id="modal2 " class="modal ">
                            <div class="modal-content">
                                <form action="/waktu" method="POST">
                                    @csrf
                                    <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                    <div class="form-group">
                                        <label for="jurusan">Waktu awal</label>
                                        <input value="" class="form-control" name="waktu_awal" id="jurusan"
                                            type="time" placeholder="waktu awal" />
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">Waktu akhir</label>
                                        <input value="" class="form-control" name="waktu_akhir" id="jurusan"
                                            type="time" placeholder="waktu akhir" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Tambah</button>
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
                                <th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($waktu as $w)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $w->waktu_awal }} - {{ $w->waktu_akhir }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        <a class="btn waves-effect waves-light modal-trigger red"
                                            href="#modal3 {{ $w->id }}"><i
                                                class="fa-solid fa-trash"{{ $w->id }}"></i></a>
                                        <a class="btn waves-effect waves-light modal-trigger green"
                                            href="#modal2 {{ $w->id }}"><i class="fa-solid fa-pen"></i></a>
                                    </td>



                                    <div id="modal2 {{ $w->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/waktu/{{ $w->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                <div class="form-group">
                                                    <label for="jurusan">Waktu awal</label>
                                                    <input value="{{ old('mapel', $w->waktu_awal) }}" class="form-control"
                                                        name="waktu_awal" id="jurusan" type="time"
                                                        placeholder="waktu awal" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jurusan">Waktu akhir</label>
                                                    <input value="{{ old('mapel', $w->waktu_akhir) }}" class="form-control"
                                                        name="waktu_akhir" id="jurusan" type="time"
                                                        placeholder="waktu akhir" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    {{-- delete --}}
                                    <div id="modal3 {{ $w->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/waktu/{{ $w->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="form-group">
                                                    <h5 class="font-weight-bold mb-3">Apakah anda yakin menghapus
                                                        waktu <b>{{ $w->waktu_awal }} - {{ $w->waktu_akhir }}</b> ?
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
