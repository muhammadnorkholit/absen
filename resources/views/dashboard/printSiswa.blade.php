@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Print Data Siswa</h5>
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
                                <form action="/filpemilihan" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col s2">
                                                <div class="form-group">
                                                    <label>Tipe</label>
                                                    <select class="form-control" name="tipe">
                                                        <option value="">Pilih disini</option>
                                                        <option value="Siswa">Siswa</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Karyawan">Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>kelas</label>
                                                    <select class="form-control" name="kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>                            
                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>No</label>
                                                    <select class="form-control" name="no_kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s7">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <select class="form-control" name="jurusan">
                                                        <option value="">Pilih Disini</option>
                                                        @foreach($absen as $item)
                                                        <option value="{{ $item->nama_jurusan }}">
                                                            {{ $item->nama_jurusan }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-md col-12 indigo" value="Filter">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row m-t-40" style="text-align: left;">
                                    <div class="col s12">                        
                                        <a href="/filsemua" class="btn teal mb-3">Semua</a>
                                        <a href="/filaktif" class="btn teal mb-3">Aktif</a>
                                        <a href="/filnonaktif" class="btn teal mb-3">Nonaktif</a>                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection