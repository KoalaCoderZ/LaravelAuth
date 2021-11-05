<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $data = [
            "title" => "Beranda"
        ];

        return view('profile', $data);
    }
}
