<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\siswa;

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


        Auth::login($data);
        if ($data) {

            // dd(Auth::id());
            DB::table('absen')->insert([
                'id_siswa' => Auth::id()
            ]);
            return redirect()->intended('/landing');
        } else {
            return redirect()->back();
        }
    }
}
