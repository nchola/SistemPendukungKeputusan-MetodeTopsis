<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubKriteriaController extends Controller
{
    public function index()
    {
        return view('sub_kriteria.index', [
            'sub_kriteria' => SubKriteria::all()
        ]);
    }

    public function create()
    {
        $kriteria = Kriteria::all();
        return view('sub_kriteria.create',[
            'kriteria' => $kriteria
        ]);
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'id_kriteria' => 'required',
            'nama_sub_kriteria' => 'required',
            'nilai' => 'required',
        ]);

        $store = SubKriteria::create($payload);
        Session::put('store', $store);
        return redirect()->route('sub_kriteria.index');
    }

    public function edit(SubKriteria $sub_kriterium)
    {
        $kriteria = Kriteria::all();
        return view('sub_kriteria.edit', [
            'sub_kriteria' => $sub_kriterium,
            'kriteria' => $kriteria
        ]);
    }

    public function update(Request $request, SubKriteria $sub_kriterium)
    {
        $payload = $request->validate([
            'id_kriteria' => 'required',
            'nama_sub_kriteria' => 'required',
            'nilai' => 'required',
        ]);

        $update = $sub_kriterium->update($payload);
        Session::put('update', $update);
        return redirect()->route('sub_kriteria.index');
    }

    public function destroy(SubKriteria $sub_kriteria)
    {
        $destroy = $sub_kriteria->delete();
        Session::put('destroy', $destroy);
        return redirect()->route('sub_kriteria.index');
    }
}
