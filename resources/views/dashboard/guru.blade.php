@extends('layout.dash')

@section('content')
    <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Jurusan</h5>
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
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <form action="" method="POST">
                                                    @csrf
                                                    <h3 style="text-align: center"><b>Tambah Data</b></h3>
                                                <label class="form-label" for="form3Example3">Guru</label>
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="form3Example3" name="nisn" class="form-control form-control-lg"
                                                        placeholder="Masukkan Jurusan" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary">Tambah data</button>
                                            </div>
                                        </div>
                                    <button type="button" class="btn btn-secondary">Import pdf</button>
                                    </div>
                                    <div id="editable-datatable_filter" class="dataTables_filter"><input type="search" class="" placeholder="cari" aria-controls="editable-datatable"></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Kode Guru</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
@endsection