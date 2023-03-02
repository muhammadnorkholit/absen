@extends('layout.dash')

@section('meta-refresh')
{{-- <meta http-equiv="refresh" content="240" > --}}
@endsection

@section('content')
<style>
        .success-gradient-1{
        background: linear-gradient(to right, #2ea1a9 0%, #31b479 100%);
        }
        .info-gradient-1{
           background:  linear-gradient(to right, #6579c1 0%, #38aec3 100%);
        }
        .danger-gradient-1{
            background: linear-gradient(to right, #9374d8 0%, #d86395 100%);
        }
</style>
    <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Dashboard</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{count($siswa)}}</h2>
                                        <h6 class="white-text op-5 light-blue-text">Total Siswa</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card info-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{count($jurusan)}}</h2>
                                        <h6 class="white-text op-5">Total jurusan</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{count($guru)}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Total Guru</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col l3 m6 s12">
                        <div class="card warning-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{count($ruangan)}}</h2>
                                        <h6 class="white-text op-5">total ruang</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">home</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


               
                </div>

                <h5 class="font-medium" style="margin-top: 3rem;margin-bottom:1.5rem">Pilih Sesi</h5>
                <ul class="d-flex">
                    
                    <li><a href="/dashboard" style="margin-right: .6rem;{{$sesi == 1 ?'opacity:1':'opacity:.5'}}" class="btn btn-md col-12 indigo">1</a></li>
                    <li><a href="?sesi=2" style="margin-right: .6rem;{{$sesi == 2 ?'opacity:1':'opacity:.5'}}" class="btn btn-md col-12 indigo">2</a></li>
                    <li><a href="?sesi=3" style="margin-right: .6rem;{{$sesi == 3 ?'opacity:1':'opacity:.5'}}" class="btn btn-md col-12 indigo">3</a></li>
                </ul>


                <div class="row" id="absen">
                    
                        @foreach ($ruangan as $ruang)
                        <div class="col l3 m6 s12">
                            <div class="card {{$sesi == 1 ?"danger-gradient-1" : ($sesi == 2 ? "info-gradient-1":" success-gradient-1")}}  card-hover" >
                                <div class="card-content">
                                    <div class="d-flex no-block align-items-center">
                                        @php
                                            $countHadir = 0;
                                            $countTHadir = 0;
                                            foreach ($absen as $a ) {
                                                if ($a->id_ruangan == $ruang->id && $a->status == "hadir") {
                                                    $countHadir++;
                                                }
                                                if ($a->id_ruangan == $ruang->id && $a->status != "hadir") {
                                                    $countTHadir++;
                                                }
                                            }
                                        @endphp
                                       
                                        
                                        <div style="width: 100%">
                                            <div class="d-flex" style="justify-content: space-between">
                                                <h6 class="white-text m-b-5">Hadir</h2>
                                                <h6 class="white-text m-b-5">Tidak Hadir</h2>
    
                                                </div>
                                            <div class="d-flex"  style="justify-content: space-between">
                                                <h6 class="white-text m-b-5">{{$countHadir}}</h2>
                                                <h6 class="white-text m-b-5">{{$countTHadir ? $countTHadir : 'Nihil'}} </h2>
    
                                                </div>
                                            <h6 class="white-text op-5">Ruangan {{$ruang->nama_ruangan}} Sesi {{$sesi}}</h6>
                                        </div>
                                        {{-- <div class="ml-auto">
                                            <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- style="background: linear-gradient(to right, #a77ffc 0%, #46e9a4 100%);" --}}
                        
                </div>
            </div>

@endsection