<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('register');
    }

    public function datang(Request $request)
    {
        $first = $request->firstname;
        $last = $request->lastname;
        return view('welcome', compact('first', 'last'));
    }
}
