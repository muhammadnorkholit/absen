<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\JurusanImport;


class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = DB::table('jurusan')->get();
        return view('dashboard.jurusan', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'jurusan' => 'required'
            ],
            [
                'jurusan.required' => 'jurusan wajib di isi'
            ]
        );

        $jurusan = Str::upper($request->jurusan);

        DB::table('jurusan')->insert([
            'jurusan' => $jurusan
        ]);


        return redirect()->back()->with('success', 'jurusan berhasil di tambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'jurusan' => 'required'
            ],
            [
                'jurusan.required' => 'jurusan wajib di isi'
            ]
        );

        $jurusan = Str::upper($request->jurusan);

        DB::table('jurusan')->where('id', $id)->update([
            'jurusan' => $jurusan
        ]);


        return redirect()->back()->with('success', 'jurusan berhasil di edit');
    }

    public function destroy($id)
    {
        DB::table('jurusan')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'jurusan berhasil di hapus');
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

        Excel::import(new JurusanImport, public_path('Excel/' . $nama_file));
        return redirect()->back();
    }
}
