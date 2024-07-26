<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where([
            'username' => $credential['username'],
            'password' => $credential['password'],
        ])->first();

        if (!$user) {
            $user = Pegawai::where([
                'username' => $credential['username'],
                'password' => $credential['password'],
            ])->first();
            if ($user) {
                $user->role = "Pegawai";
            }
        }

        if ($user) {
            Session::put('auth', $user);
            return redirect()->route('main');
        } else {
            return redirect()->back()->withErrors(['message' => 'Username atau password salah!']);
        }
    }

    function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
