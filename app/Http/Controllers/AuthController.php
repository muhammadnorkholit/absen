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

        if ($data) {

            Auth::login($data);

            // dd(Auth::id());
            DB::table('absen')->insert([
                'id_siswa' => Auth::id(),
                "status" => "hadir"
            ]);

            return redirect('https://www.youtube.com/watch?v=kgx4WGK0oNU&ab_channel=%E9%98%BF%E9%B2%8DAbao');
        } else {
            return redirect()->back();
        }
    }
}
