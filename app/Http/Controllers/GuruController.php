<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\guruimport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = DB::table('guru')->get();
        return view('dashboard.guru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'guru' => 'required'
            ],
            [
                'guru.required' => 'nama guru wajib di isi',
            ]
        );

        $guru = ($request->guru);

        DB::table('guru')->insert([
            'guru' => $guru
        ]);


        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate(
            [
                'guru' => 'required'
            ],
            [
                'guru.required' => 'guru wajib di isi'
            ]
        );

        $guru = Str::upper($request->guru);

        DB::table('guru')->where('id', $id)->update([
            'guru' => $guru
        ]);

        return redirect()->back()->with('success', 'link berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('guru')->where('id', $id)->delete();
        return redirect()->back()->with('success');//
    }

    public function ImportGuruExcel(Request $request)
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

        Excel::import(new guruimport, public_path('Excel/' . $nama_file));

        // return redirect()->back();
    }
}
