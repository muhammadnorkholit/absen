<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use App\Models\siswa;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function loginAdmin()
    {
        return view('auth.loginAdmin');
    }

    public function loginAuth2(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth::logout();
        return redirect()->back();
    }


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

            DB::table('absen')->insert([
                'id_siswa' => Auth::id(),
                "status" => "hadir",
                "sesi" => "1",
                "id_ruang" => "1"
            ]);

            return redirect('/ujian');
        } else {
            return redirect()->back();
        }
    }

    public function absenUi()
    {
        $id = Auth::id();
        $data = siswa::where('id', $id)->first();
        $link = DB::table('link')->get();

        $ruang = DB::table('ruangan')->get();

        return view('landing.absen', compact('data', 'ruang', 'link'));
    }

    public function absen(Request $request, $id)
    {
        $link = DB::table('link')->get();
        $sesi = $request->sesi;
        $ruang = $request->ruangan;
        DB::table('absen')->where('id', $id)->update(
            [
                'sesi' => $sesi,
                'id_ruang' => $ruang
            ]
        );
        return redirect('https://id.search.yahoo.com/search?fr=mcafee&type=E210ID714G0&p=laravel+remove+whitespace');
    }
}
