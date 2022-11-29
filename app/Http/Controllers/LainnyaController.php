<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LainnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = DB::table('link')->get();
        return view('dashboard.lainnya', compact('link'));
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
                'link' => 'required'
            ],
            [
                'link.required' => 'link wajib di isi',
            ]
        );

        $link = ($request->link);

        DB::table('link')->insert([
            'link' => $link
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
    public function edit()
    {
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'link' => 'required'
            ],
            [
                'link.required' => 'link wajib di isi'
            ]
        );

        $link = $request->link;

        DB::table('link')->where('id', $id)->update([
            'link' => $link
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
        DB::table('link')->where('id', $id)->delete();
        return redirect()->back()->with('success');
    }
}
