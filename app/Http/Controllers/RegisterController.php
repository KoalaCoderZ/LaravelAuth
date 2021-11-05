<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('register', $data);
    }

    public function store(Request $request)
    {


        // Validation
        $validatedData = $request->validate([
            'nama_depan'           => 'required|max:255',
            'nama_belakang'        => 'required|max:255',
            'username'             => ['required', 'min:5', 'max:100', 'unique:users'],
            'email'                => 'required|email:dns|unique:users',
            'password'             => 'required|min:5|max:255',
            'ulangi_password'      => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $newUser = [
            'firstName'        => $request->nama_depan,
            'lastName'     => $request->nama_belakang,
            'username'          => $request->username,
            'birthPlace'      => $request->tempat_lahir,
            'birthDate'         => date('Y-m-d', strtotime($request->tgl_lahir)),
            'email'             => $request->email,
            'address'            => $request->alamat,
            'password'          => Hash::make($request->password),
            'ulangi_password'   => Hash::make($request->ulangi_password)
        ];

        $CreateNewUser = new User;

        $newUser = $CreateNewUser->create($newUser);

        return redirect('/login')->with('success', 'Registrasi anda berhasil! Silahkan login.');
    }
}
