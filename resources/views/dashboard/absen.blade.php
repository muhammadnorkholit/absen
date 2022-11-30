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
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Filter</h5><br>
                        <form action="/absen" method="post">
                            @csrf
                            <div class="col-12">
                                <div class="row">
                                    <div class="col s3">
                                        <div class="form-group">
                                            <label>Ruangan</label>
                                            <select class="form-control" name="ruangan">
                                                <option value="">Pilih Disini</option>
                                                @foreach ($ruangan as $r)
                                                    <option value="{{ $r->id }}">{{ $r->nama_ruangan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s3">
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



                                    <div class="col s1 m-t-30">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-md col-12 indigo" name="action"
                                                value="Siapkan Siswa">
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
@endsection
