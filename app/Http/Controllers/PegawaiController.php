<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.index', [
            'pegawai' => Pegawai::all()
        ]);
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $store = Pegawai::create($payload);
        Session::put('store', $store);
        return redirect()->route('pegawai.index');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', [
            'pegawai' => $pegawai
        ]);
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $payload = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $update = $pegawai->update($payload);
        Session::put('update', $update);
        return redirect()->route('pegawai.index');
    }

    public function destroy(Pegawai $pegawai)
    {
        $destroy = $pegawai->delete();
        Session::put('destroy', $destroy);
        return redirect()->route('pegawai.index');
    }
}
