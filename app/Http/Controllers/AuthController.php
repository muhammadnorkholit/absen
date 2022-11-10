<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        
    }
}
