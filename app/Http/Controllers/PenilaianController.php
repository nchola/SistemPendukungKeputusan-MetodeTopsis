<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Pegawai;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenilaianController extends Controller
{
    public function index(Request $request)
    {
        $tahun = $request->get('tahun', date("Y"));
        $pegawai = Pegawai::whereRelation('penilaian', 'tahun', $tahun)
            ->with('penilaian', function ($q) use ($tahun) {
                $q->where('tahun', $tahun)->orderBy('id_kriteria');
            })->get();
        $kriteria = Kriteria::orderBy('id')->get();
        return view('penilaian.index', [
            'kriteria' => $kriteria,
            'pegawai' => $pegawai,
        ]);
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        $kriteria = Kriteria::orderBy('id')->get();
        return view('penilaian.create', [
            'pegawai' => $pegawai,
            'kriteria' => $kriteria
        ]);
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'id_pegawai' => 'required',
            'tahun' => 'required',
            'id_kriteria' => 'required|array',
            'nilai' => 'required|array',
        ]);

        $check = Penilaian::where([
            'id_pegawai' => $payload['id_pegawai'],
            'tahun' => $payload['tahun'],
        ])->first();
        if ($check) {
            return redirect()->back()->withErrors(['message' => 'Penilaian ' . $check->pegawai->nama . ' pada tahun tersebut sudah ada!']);
        }

        for ($i = 0; $i < count($payload['id_kriteria']); $i++) {
            $store = Penilaian::create([
                'id_pegawai' => $payload['id_pegawai'],
                'tahun' => $payload['tahun'],
                'id_kriteria' => $payload['id_kriteria'][$i],
                'nilai' => $payload['nilai'][$i],
            ]);
        }

        Session::put('store', $store);
        return redirect()->route('penilaian.index');
    }

    public function edit(Request $request, $id)
    {
        $tahun = $request->get('tahun', date("Y"));
        $kriteria = Kriteria::orderBy('id')->get();
        $pegawai = Pegawai::all();
        $penilaian = Penilaian::where([
            'tahun' => $tahun,
            'id_pegawai' => $id,
        ])->orderBy('id_kriteria')->get();

        return view('penilaian.edit', [
            'kriteria' => $kriteria,
            'pegawai' => $pegawai,
            'penilaian' => $penilaian,
            'id' => $id,
        ]);
    }

    public function update(Request $request, $id)
    {
        $tahun = $request->get('tahun');
        $payload = $request->validate([
            'id_pegawai' => 'required',
            'tahun' => 'required',
            'id_kriteria' => 'required|array',
            'nilai' => 'required|array',
        ]);

        for ($i = 0; $i < count($payload['id_kriteria']); $i++) {
            $penilaian = Penilaian::where([
                'tahun' => $tahun,
                'id_pegawai' => $id,
                'id_kriteria' => $payload['id_kriteria'][$i]
            ])->first();
            $update = $penilaian->update([
                'id_pegawai' => $payload['id_pegawai'],
                'tahun' => $payload['tahun'],
                'nilai' => $payload['nilai'][$i],
            ]);
        }

        Session::put('update', $update);
        return redirect()->route('penilaian.index');
    }

    public function destroy(Request $request, $id)
    {
        $tahun = $request->get('tahun');
        $destroy = Penilaian::where([
            'tahun' => $tahun,
            'id_pegawai' => $id,
        ])->delete();

        Session::put('destroy', $destroy);
        return redirect()->route('penilaian.index');
    }
}
