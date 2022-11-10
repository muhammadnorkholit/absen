<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurusanModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
}
