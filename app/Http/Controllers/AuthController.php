<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login', $data);
    }


    public function loginProcess(Request $req)
    {
        // var_dump($req);
        $credentials = $req->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);


        if (Auth::attempt($credentials)) {

            // generate session user yang login
            $req->session()->regenerate();

            return redirect()->route('profile')->with('success', 'Welcome.');
        } else {
            // var_dump($credentials);
            return back()->with('loginError', 'You are unidentified');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('succesLogout', 'Anda telah logout.');
    }
}
