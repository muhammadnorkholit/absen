<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = DB::table('teknisi ')->get();
        return view('dashboard.karyawan', compact('karyawan'));
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
                'karyawan' => 'required'
            ],
            [
                'karyawan.required' => 'nama karyawan wajib di isi',
            ]
        );

        $karyawan = ($request->karyawan);

        DB::table('teknisi')->insert([
            'karyawan' => $karyawan
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

    
    public function update(Request $request, $id)
    {
         $request->validate(
            [
                'karyawan' => 'required'
            ],
            [
                'karyawan.required' => 'karyawan wajib di isi'
            ]
        );

        $karyawan = Str::upper($request->karyawan);

        DB::table('teknisi')->where('id', $id)->update([
            'karyawan' => $karyawan
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
        DB::table('teknisi')->where('id', $id)->delete();
        return redirect()->back()->with('success');
    }
}
