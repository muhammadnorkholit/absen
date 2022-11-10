@extends('layout.dash')

@section('content')
    <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Kelas</h5>
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
                                                <form method="POST" action="/kelas">
                                                    @csrf
                                                    <h3 class="text-centter"><b>Tambah Data</b></h3>
                                                    <div class="modal-body">
                                                        <div class="sbp-preview">
                                                            <div class="sbp-preview-content">
                                                                <label class="d-block" for="kelas">Kelas</label>
                                                                <div class="form-group d-flex" style="gap:20px">
                                                                    <div class="custom-control custom-radio">
                                                                        <label>
                                                                            <input value="x" class="with-gap" id="kelas1" name="kelas" type="radio"  />
                                                                            <span>X</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="xi" class="with-gap" id="kelas2" name="kelas" type="radio"  />
                                                                            <span>XI</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="xii" class="with-gap" id="kelas3" name="kelas" type="radio"  />
                                                                            <span>XII</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                @error('kelas')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                                <label class="d-block" for="exampleFormControlInput1">No Kelas</label>
                                                                <div class="form-group d-flex" style="gap:20px">
                                                                    <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="1" class="with-gap" id="nokelas1" name="no_kelas" type="radio"  />
                                                                            <span>1</span>
                                                                        </label>
                                                                    </div>
                                                                     <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="2" class="with-gap" id="nokelas2" name="no_kelas" type="radio"  />
                                                                            <span>2</span>
                                                                        </label>
                                                                    </div> <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="3" class="with-gap" id="nokelas3" name="no_kelas" type="radio"  />
                                                                            <span>3</span>
                                                                        </label>
                                                                    </div> <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="4" class="with-gap" id="nokelas4" name="no_kelas" type="radio"  />
                                                                            <span>4</span>
                                                                        </label>
                                                                    </div> <div class="custom-control custom-radio">
                                                                         <label>
                                                                            <input value="5" class="with-gap" id="nokelas5" name="no_kelas" type="radio"  />
                                                                            <span>5</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                @error('nokelas')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                                <div class="form-group">
                                                                    <label class="d-block" for="exampleFormControlSelect1">Pilih
                                                                        Jurusan</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                                        name="jurusan">
                                                                        @foreach ($jurusan as $jur)
                                                                            <option value="{{ $jur->id }}">{{ $jur->jurusan }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('jurusan')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">Tambah</button>
                                                    </div>
                                                </form>
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
                                                <th>Kelas</th>
                                                <th>jurusan</th>
                                                <th>no kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ?>
                                @foreach ($kelas as $k)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $k->kelas }}</td>
                                        <td>{{ $k->jurusan }}</td>
                                        <td>{{ $k->no_kelas }}</td>
                                        <td class="d-flex justify-content-evenly">
                                                        <a class="waves-effect waves-light modal-trigger" style="color: red"><i class="fa-solid fa-trash" href="#modal3 {{ $jur->id }}"></i></a>
                                                        <a class="waves-effect waves-light modal-trigger" href="#modal2 {{ $k->id }}" style="color:rgb(56, 72, 124)"><i class="fa-solid fa-pen"></i></a>
                                                    </td>

                                        
                                        {{-- edit --}}
                                        <div class="modal fade" id="modal2 {{ $k->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLaibel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit kelas</h5>
                                                    </div>
                                                        <form method="POST" action="/kelas/{{ $k->id }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="sbp-preview">
                                                                    <div class="sbp-preview-content">
                                                                        <label class="d-block" for="kelas">Kelas</label>
                                                                        <div class="form-group d-flex" style="gap:20px">
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->kelas == 'X' ? 'checked' : '' }} value="x" class="with-gap" id="kelas1" name="kelas" type="radio" for="kelasE1" />
                                                                                    <span for="kelasE1" >X</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->kelas == 'XI' ? 'checked' : '' }} value="xii" class="with-gap" id="kelas1" name="kelas" type="radio" for="kelasE2" />
                                                                                    <span for="kelasE2">XI</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->kelas == 'XII' ? 'checked' : '' }} value="xii" class="with-gap" id="kelas1" name="kelas" type="radio" for="kelasE3" />
                                                                                    <span for="kelasE3">XII</span>
                                                                                </label>
                                                                            </div>
                                                                            {{-- <div class="custom-control custom-radio">
                                                                                
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="kelas" id="">
                                                                                <label class="custom-control-label"
                                                                                    for="kelasE1">x</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input {{ $k->kelas == 'XI' ? 'checked' : '' }}
                                                                                    value="xi"
                                                                                    class="custom-control-input"
                                                                                    id="kelasE2" type="radio"
                                                                                    name="kelas" />
                                                                                <label class="custom-control-label"
                                                                                    for="kelasE2">Xi</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input
                                                                                    {{ $k->kelas == 'XII' ? 'checked' : '' }}
                                                                                    value="xii"
                                                                                    class="custom-control-input"
                                                                                    id="kelasE3" type="radio"
                                                                                    name="kelas" />
                                                                                <label class="custom-control-label"
                                                                                    for="kelasE3">Xii</label>
                                                                            </div> --}}
                                                                        </div>
                                                                        @error('kelas')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                        <label class="d-block"
                                                                            for="exampleFormControlInput1">No Kelas</label>
                                                                        <div class="form-group d-flex" style="gap:20px">
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->no_kelas == '1' ? 'checked' : '' }} value="1" class="with-gap" id="nokelas1" name="no_kelas" type="radio"  />
                                                                                    <span>1</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->no_kelas == '2' ? 'checked' : '' }} value="2" class="with-gap" id="nokelas2" name="no_kelas" type="radio"  />
                                                                                    <span>2</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->no_kelas == '3' ? 'checked' : '' }} value="3" class="with-gap" id="nokelas3" name="no_kelas" type="radio"  />
                                                                                    <span>3</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->no_kelas == '4' ? 'checked' : '' }} value="4" class="with-gap" id="nokelas4" name="no_kelas" type="radio"  />
                                                                                    <span>4</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <label>
                                                                                    <input {{ $k->no_kelas == '5' ? 'checked' : '' }} value="5" class="with-gap" id="nokelas5" name="no_kelas" type="radio"  />
                                                                                    <span>5</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        @error('nokelas')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror

                                                                        <div class="form-group">
                                                                            <label class="d-block"
                                                                                for="exampleFormControlSelect1">Pilih
                                                                                Jurusan</label>
                                                                            <select class="form-control"
                                                                                id="exampleFormControlSelect1" name="jurusan">
                                                                                @foreach ($jurusan as $j)
                                                                                    <option value="{{ $j->id }}">
                                                                                        {{ $j->jurusan }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('jurusan')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="submit">Ubah</button>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div>


                                        </div>
                                        {{-- edit --}}
                                    
                                        <div class="modal fade" id="e{{ $k->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        {{-- <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori
                                                        </h5> --}}
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&#xD7;</span></button>
                                                    </div>
                                                    <form method="post" action="/kelas/{{ $k->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-body">
                                                            <p class="font-weight-bold mb-3">Apakah anda yakin
                                                                menghapus
                                                                kelas {{ $k->kelas }} {{ $k->jurusan }}
                                                                {{ $k->no_kelas }} ?
                                                            </p>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-warning"
                                                                    type="submit">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                @endforeach
                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
@endsection