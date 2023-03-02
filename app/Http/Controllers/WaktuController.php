<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waktu = DB::table('waktu')->get();
        return view('dashboard.waktu', compact('waktu'));
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
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required'
            ] 
        );
        $waktu_awal = $request->waktu_awal;
        $waktu_akhir = $request->waktu_akhir;

        DB::table('waktu')->insert([
            'waktu_awal' => $waktu_awal,
            'waktu_akhir' => $waktu_akhir
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
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required'
            ] 
        );

        $waktu_awal = $request->waktu_awal;
        $waktu_akhir = $request->waktu_akhir;

        DB::table('waktu')->where('id', $id)->update([
            'waktu_awal' => $waktu_awal,
            'waktu_akhir' => $waktu_akhir
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
        DB::table('waktu')->where('id', $id)->delete();
        return redirect()->back()->with('success');
    }
}
