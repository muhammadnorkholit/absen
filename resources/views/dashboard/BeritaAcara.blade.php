@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <style>
            .select-dropdown {
                display: none !important;
            }

            .select2-selection {
                height: auto !important;
                border: none !important;
                border-bottom: 1px solid rgba(0, 0, 0, .5) !important;
                border-radius: 0 !important;
                padding: .4rem;
                margin-bottom: 1rem;
            }
        </style>
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Print Berita Acara</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if (Session::has('error'))
            <div class="col">
                <div class="alert red mx-3 " style="color:white;padding: 1.5rem;background:rgb(70, 187, 70);">
                    {{ Session::get('error') }}</div>
            </div>
        @endif
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
                                            <select class="form-control    js-select" name="ruangan">
                                                <option value="">Pilih Disini</option>
                                                @foreach ($ruangan as $r)
                                                    <option {{ old('ruangan') == $r->id ? 'selected' : '' }}
                                                        value="{{ $r->id }}"> {{ $r->nama_ruangan }}</option
                                                        Required>
                                                @endforeach
                                            </select>
                                            @error('ruangan')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col s3">
                                        <div class="form-group">
                                            <label>Pengawas Ujian</label>
                                            <select class="form-control    js-select" name="guru">
                                                <option value="">Pilih Disini</option>
                                                @foreach ($guru as $g)
                                                    <option {{ old('guru') == $g->id ? 'selected' : '' }}
                                                        value="{{ $g->id }}"> {{ $g->guru }}</option Required>
                                                @endforeach
                                            </select>
                                            @error('guru')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col s1">
                                        <div class="form-group">
                                            <label>sesi</label>
                                            <select class="form-control    js-select" name="sesi" Required>
                                                <option value="">Pilih</option>
                                                <option {{ old('sesi') == 1 ? 'selected' : '' }} value="1">1</option>
                                                <option {{ old('sesi') == 2 ? 'selected' : '' }} value="2">2</option>
                                                <option {{ old('sesi') == 3 ? 'selected' : '' }} value="3">3</option>
                                            </select>
                                            @error('sesi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col s3">
                                        <div class="form-group">
                                            <label>Mapel 1 </label>
                                            <select class="form-control    js-select" name="mapel1">
                                                <option value="">Pilih</option>
                                                @foreach ($mapel1 as $m)
                                                    <option value="{{ $m->id }}"> {{ $m->nama_mapel }}</option
                                                        Required>
                                                @endforeach
                                            </select>
                                            @error('mapel1')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col s3">

                                        <div class="form-group">
                                            <label>Mapel 2 (optional) </label>

                                            <select class="form-control    js-select" name="mapel2">
                                                <option value="">Pilih</option>
                                                @foreach ($mapel2 as $m2)
                                                    <option value="{{ $m2->id }}"> {{ $m2->nama_mapel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col s2">
                                        <div class="form-group">
                                            <label>Waktu Ujian</label>
                                            <select class="form-control    js-select" name="waktu">
                                                <option value="">Pilih Disini</option>
                                                @foreach ($waktu as $w)
                                                    <option value="{{ $w->id }}"> {{ $w->waktu_awal }}
                                                        {{ $w->waktu_akhir }}</option Required>
                                                @endforeach
                                            </select>
                                            @error('waktu')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>






                                    <div class="col s1 m-t-30">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md col-12 indigo" name="action"
                                                value="Print">print</button>
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

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content" style="text-align: center;">
                        <h5 class="card-title">Catatan</h5><br>
                        <p>Mapel 2 di isi apabila terdapat 2 mapel berbeda di jam yang sama, jika tidak ada tidak perlu di
                            isi</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
