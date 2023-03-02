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
                                                    <select class="form-control" name="ruangan">
                                                        <option value="">Pilih Disini</option>
                                                        @foreach ($ruangan as $r)
                                                            <option {{old('ruangan') == $r->id?'selected':''}} value="{{ $r->id }}">    {{ $r->nama_ruangan }}</option Required>
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
                                                            <option {{old('guru') == $r->id?'selected':''}} value="{{ $r->id }}">    {{ $g->guru }}</option Required>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s1">
                                                <div class="form-group">
                                                    <label>sesi</label>
                                                    <select class="form-control" name="sesi" Required>
                                                        <option  value="">Pilih</option>
                                                        <option {{old('sesi') == 1?'selected':''}} value="1">1</option>
                                                        <option {{old('sesi') == 2?'selected':''}} value="2">2</option>
                                                        <option {{old('sesi') == 3?'selected':''}} value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Mapel 1 </label>
                                                    <select class="form-control" name="mapel1">
                                                        <option value="">Pilih</option>
                                                        @foreach ($mapel1 as $m)
                                                            <option value="{{ $m->id }}">    {{ $m->nama_mapel }}</option Required>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Mapel 2 </label>
                                                    <select class="form-control" name="mapel2">
                                                        <option value="">Pilih</option>
                                                        @foreach ($mapel2 as $m2)
                                                            <option value="{{ $m2->id }}">    {{ $m2->nama_mapel }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col s2">
                                                <div class="form-group">
                                                    <label>Waktu Ujian</label>
                                                    <select class="form-control" name="waktu">
                                                        <option value="">Pilih Disini</option>
                                                        @foreach ($waktu as $w)
                                                            <option value="{{ $w->id }}">    {{ $w->waktu_awal }} {{ $w->waktu_akhir }}</option Required>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            


                                            

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