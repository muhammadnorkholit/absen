@extends('layout.dash')

@section('content')
<div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0"> Data Siswa</h5>
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
                                <form action="/printSiswa" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col s3">
                                                <div class="form-group">
                                                    <label>Pilih Waktu</label>
                                                    <input type="date" name="waktu">
                                                </div>
                                            </div>  
                                         
                                            <div class="col s1 m-t-30">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-md col-12 indigo" name="action" value="Filter">
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


           

            </div>
@endsection