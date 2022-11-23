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
                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Ruangan</label>
                                                    <select class="form-control" name="no_kelas">
                                                        @foreach ($ruangan as $r)
                                                            <option value="{{ $r->id }}">    {{ $r->nama_ruangan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s5">
                                                <div class="form-group">
                                                    <label>Guru</label>
                                                    <select class="form-control" name="no_kelas">
                                                        @foreach ($guru as $g)
                                                            <option value="{{ $r->id }}">    {{ $g->guru }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-md col-12 indigo" name="action" value="Print">
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