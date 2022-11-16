<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\siswa;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function loginUi()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {

        $request->validate([
            'nisn' => ['required', 'max:10']
        ]);

        $data = siswa::where('nisn', $request->nisn)->first();

        if ($data) {

            Auth::login($data);


            // dd(Auth::id());
            DB::table('absen')->insert([
                'id_siswa' => Auth::id(),
                "status" => "hadir",
                "sesi" => "1"
            ]);

            return redirect('/ujian');
        } else {
            return redirect()->back();
        }
    }

    public function absenUi()
    {
        return view('landing.absen');
    }

    public function absen(Request $request, $id)
    {
        $sesi = $request->sesi;
        DB::table('kategori')->where('id', $id)->update(
            [
                'sesi' => $sesi
            ]
        );
        return redirect()->back()->with('success', 'kategori berhasil diedit');
    }
}
