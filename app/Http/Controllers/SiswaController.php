<?php

namespace App\Http\Controllers;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')
            ->select('jurusan.*')
            ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
            ->get();
        return view('dashboard.siswa', compact('siswa',));
    }

    public function ImportSiswaExcel(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSiswa', $namaFile);

        Excel::import(new SiswaImport, public_path('DataSiswa'));
        Return redirect('/siswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswa,nisn|max:10',
            'jurusan' => 'required',
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'nisn.required' => 'nisn tidak boleh kosong',
            'nisn.max:10' => 'nisn harus pas 10',
            'nisn.unique' => 'nisn sudah terdaftar',
            'jurusan.required' => 'jurusan tidak boleh kosong',
        ]);

        $nama = Str::upper($request->nama);
        $nisn = $request->nisn;
        $jurusan = $request->jurusan;

        DB::table('siswa')->insert([
            'nama' => $nama,
            'nisn' => $nisn,
            'id_jurusan' => $jurusan
        ]);
        return redirect()->back()->with('success', 'siswa berhasil ditambahkan');
    }
}
