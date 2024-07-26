<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $store = User::create($payload);
        Session::put('store', $store);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $payload = $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $update = $user->update($payload);
        Session::put('store', $update);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $destroy = $user->delete();
        Session::put('destroy', $destroy);
        return redirect()->route('users.index');
    }
}
