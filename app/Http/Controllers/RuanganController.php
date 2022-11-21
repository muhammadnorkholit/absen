<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang = DB::table('ruangan')->get();
        return view('dashboard.ruang', compact('ruang'));
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
                'nama_ruangan' => 'required',
                'no_ruangan' => 'required'
            ],
            [
                'nama_ruangan.required' => 'nama_ruangan wajib di isi',
                'no_ruangan.required' => 'no_ruangan wajib di isi'
            ]
        );

        $nama_ruangan = Str::upper($request->nama_ruangan);
        $no_ruangan = Str::upper($request->no_ruangan);

        DB::table('ruangan')->insert([
            'nama_ruangan' => $nama_ruangan,
            'no_ruangan' => $no_ruangan
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
                'nama_ruangan' => 'required',
                'no_ruangan' => 'required'
            ],
            [
                'nama_ruangan.required' => 'nama_ruangan wajib di isi',
                'no_ruangan.required' => 'no_ruangan wajib di isi',
            ]
        );

        $nama_ruangan = Str::upper($request->nama_ruangan);
        $no_ruangan = ($request->no_ruangan);

        DB::table('ruangan')->where('id', $id)->update([
            'nama_ruangan' => $nama_ruangan,
            'no_ruangan' => $no_ruangan
        ]);


        return redirect()->back()->with('success',);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ruangan')->where('id', $id)->delete();
        return redirect()->back()->with('success');
    }
}
