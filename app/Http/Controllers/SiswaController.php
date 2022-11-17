<?php

namespace App\Http\Controllers;


use App\Imports\SiswaImport;
use App\Exports\SiswaExport;
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
                ->select('jurusan', 'siswa.*')
                ->join('jurusan', 'siswa.id_jurusan', 'jurusan.id')
                ->get();
            $jurusan = DB::table('jurusan')->get();
            return view('dashboard.siswa', compact('siswa', 'jurusan'));
    }

    public function export()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }

    public function ImportSiswaExcel(Request $request)
    {
        request()->validate([
            'file' => 'required|mimes:xls,xlsx',
        ], [
            'file.required' => 'Harap di isi',
            'file.mimes' => 'Tidak support',
        ]);

        $file = $request->file('file');
        $nama_file = Rand(1, 30) . $file->getClientOriginalName();
        $file->move(public_path('Excel'), $nama_file);

        Excel::import(new SiswaImport, public_path('Excel/' . $nama_file));
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswa,nisn|max:10',
            'kelas' => 'required',
            'no_kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'nisn.required' => 'nisn tidak boleh kosong',
            'nisn.max:10' => 'nisn harus pas 10',
            'nisn.unique' => 'nisn sudah terdaftar',
            'jurusan.required' => 'jurusan tidak boleh kosong',
            'kelas.required' => 'kelas tidak boleh kosong',
            'no_kelas.required' => 'no_kelas tidak boleh kosong',
        ]);

        $nama = Str::upper($request->nama);
        $nisn = $request->nisn;
        $kelas = $request->kelas;
        $no_kelas = $request->no_kelas;
        $jurusan = $request->jurusan;


        DB::table('siswa')->insert([
            'nama' => $nama,
            'nisn' => $nisn,
            'kelas' => $kelas,
            'no_kelas' => $no_kelas,
            'id_jurusan' => $jurusan
        ]);

        return redirect()->back()->with('success', 'siswa berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswa,nisn|max:10',
            'kelas' => 'required',
            'no_kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'nisn.required' => 'nisn tidak boleh kosong',
            'nisn.max:10' => 'nisn harus pas 10',
            'nisn.unique' => 'nisn sudah terdaftar',
            'jurusan.required' => 'jurusan tidak boleh kosong',
            'kelas.required' => 'kelas tidak boleh kosong',
            'no_kelas.required' => 'no_kelas tidak boleh kosong',
        ]);

        $nama = Str::upper($request->nama);
        $nisn = $request->nisn;
        $kelas = $request->kelas;
        $no_kelas = $request->no_kelas;
        $jurusan = $request->jurusan;


        DB::table('siswa')->where('id', $id)->update([
            'nama' => $nama,
            'nisn' => $nisn,
            'kelas' => $kelas,
            'no_kelas' => $no_kelas,
            'id_jurusan' => $jurusan
        ]);

        return redirect()->back()->with('success', 'siswa berhasil diubah');
    }
}
