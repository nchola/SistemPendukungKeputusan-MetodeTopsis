<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('kriteria.index', [
            'kriteria' => Kriteria::all()
        ]);
    }

    public function create()
    {
        return view('kriteria.create');
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'nama_kriteria' => 'required|regex:/^[\pL\s\-]+$/u',
            'bobot' => 'required',
        ]);

        $total_bobot = Kriteria::sum('bobot');
        if (($total_bobot + $request->bobot) > 100) {
            return redirect()->back()->withErrors([
                'error_message' => "Total bobot tidak boleh lebih dari 100"
            ]);
        }

        $store = Kriteria::create($payload);
        Session::put('store', $store);
        return redirect()->route('kriteria.index');
    }

    public function edit(Kriteria $kriterium)
    {
        return view('kriteria.edit', [
            'kriteria' => $kriterium
        ]);
    }

    public function update(Request $request, Kriteria $kriterium)
    {
        $payload = $request->validate([
            'nama_kriteria' => 'required|regex:/^[\pL\s\-]+$/u',
            'bobot' => 'required',
        ]);

        $total_bobot = Kriteria::where('id', '!=', $kriterium->id)->sum('bobot');
        if (($total_bobot + $request->bobot) > 100) {
            return redirect()->back()->withErrors([
                'error_message' => "Total bobot tidak boleh lebih dari 100"
            ]);
        }

        $update = $kriterium->update($payload);
        Session::put('update', $update);
        return redirect()->route('kriteria.index');
    }

    public function destroy(Kriteria $kriterium)
    {
        $destroy = $kriterium->delete();
        Session::put('destroy', $destroy);
        return redirect()->route('kriteria.index');
    }
}
