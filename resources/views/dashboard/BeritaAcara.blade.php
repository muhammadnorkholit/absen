@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Print Berita Acara</h5>
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
                                <form action="/print" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">                   
                                            <div class="col s2">
                                                <div class="form-group">
                                                    <label>Ruangan</label>
                                                    <select class="form-control" name="nama_ruangan">
                                                        <option value="">Pilih Disini</option>
                                                        @foreach ($ruangan as $r)
                                                            <option value="{{ $r->id }}">    {{ $r->nama_ruangan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Pengawas Ujian</label>
                                                    <select class="form-control" name="guru">
                                                        <option value="">Pilih Disini</option>
                                                        @foreach ($guru as $g)
                                                            <option value="{{ $r->id }}">    {{ $g->guru }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>sesi</label>
                                                    <select class="form-control" name="sesi">
                                                        <option value="">Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>


                                            {{-- <div class="col s1">
                                                <div class="form-group">
                                                    <label>kelas</label>
                                                    <select class="form-control" name="kelas">
                                                        <option value="">Pilih</option>
                                                        <option value="X">X</option>
                                                        <option value="XI">XI</option>
                                                        <option value="XII">XII</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s5">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <select class="form-control" name="jurusan">
                                                        <option value="">Pilih Disini</option>
                                                       @foreach ($jurusan as $j)
                                                            <option value="{{ $j->jurusan }}">  {{ $j->jurusan }}</option>
                                                        @endforeach
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
                                            </div> --}}

                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-md col-12 indigo" name="action" value="Print">print</button>
                                                </div>
                                            </div>
                                                    {{-- <a href="/print"><button type="button" class="btn btn-md col-12 indigo" name="action" value="Print">print</button></a> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
@endsection