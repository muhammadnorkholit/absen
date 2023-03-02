@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Setting link</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </div>

    {{-- link --}}
    <div class="container-fluid">
        <div class="card">
            <div class="card-content">
                <div class="header d-flex justify-content-between">
                    <div id="editable-datatable_filter" class="dataTables_filter"></div>
                </div>

                <div class="table-responsive">
                    <table class="table striped m-b-20" id="editable-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($link as $l)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $l->link }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        <a class="btn waves-effect waves-light modal-trigger green"
                                            href="#modal2 {{ $l->id }}"><i class="fa-solid fa-pen"></i></a>
                                    </td>

                                    {{-- edit --}}
                                    <div id="modal2 {{ $l->id }}" class="modal ">
                                        <div class="modal-content">
                                            <form action="/lainnya/{{ $l->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h3 style="text-align: center"><b>Ubah Data</b></h3>
                                                <div class="form-group">
                                                    <label for="jurusan">Link</label>
                                                    <input value="{{ $l->link }}" class="form-control" name="link"
                                                        id="link" type="text" placeholder="" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- edit --}}


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir link --}}
@endsection
