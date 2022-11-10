<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')
            ->select('kelas.*', 'jurusan')
            ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
            ->get();
        $jurusan = DB::table('jurusan')->get();
        return view('dashboard.kelas', compact('kelas', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'no_kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'kelas.required' => 'kelas tidak boleh kosong',
            'no_kelas.required' => 'nokelas tidak boleh kosong',
            'jurusan.required' => 'jurusan tidak boleh kosong',
        ]);

        $kelas = $request->kelas;
        $no_kelas = $request->no_kelas;
        $jurusan = $request->jurusan;
        DB::table('kelas')->insert([
            'kelas' => $kelas,
            'no_kelas' => $no_kelas,
            'id_jurusan' => $jurusan,
        ]);

        return redirect('/kelas')->with('success', 'kelas berhasil di tambah');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas' => 'required',
            'no_kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'kelas.required' => 'kelas tidak boleh kosong',
            'no_kelas.required' => 'nokelas tidak boleh kosong',
            'jurusan.required' => 'jurusan tidak boleh kosong',
        ]);

        $kelas = $request->kelas;
        $no_kelas = $request->no_kelas;
        $jurusan = $request->jurusan;
        DB::table('kelas')->where('id', $id)->update([
            'kelas' => $kelas,
            'no_kelas' => $no_kelas,
            'id_jurusan' => $jurusan,
        ]);

        return redirect('/kelas')->with('success', 'kelas berhasil di tambah');
    }
}
