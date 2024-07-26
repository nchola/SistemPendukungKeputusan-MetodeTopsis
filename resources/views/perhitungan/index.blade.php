@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Perhitungan</h2>
                </div>
                <div class="card-body">
                    <label>Tahun</label>
                    <form class="mb-2 d-flex" style="gap: 8px">
                        <select name="tahun" class="form-control" style="max-width: 128px">
                            @for ($i = 2020; $i < 2040; $i++)
                                <option {{ $i == request()->get('tahun', date('Y')) ? 'selected' : '' }}
                                    value="{{ $i }}">
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        <button class="btn btn-primary px-3 py-2">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <a href="{{ route('perhitungan.print') }}?tahun={{ request()->get('tahun', date('Y')) }}"
                            class="btn btn-danger px-3 py-2">
                            <i class="mdi mdi-printer"></i>
                        </a>
                    </form>

                    <hr>
                    <h5>Nilai</h5>
                    <table class="table table-hover table-compact">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>Pegawai</th>
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($item->penilaian as $penilaian)
                                        <td>{{ $penilaian->nilai }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <h5>Matriks Keputusan Ternormalisasi</h5>
                    <table class="table table-hover table-compact">
                        <thead>
                            <tr style="font-size: 12px;background-color:rgba(255,255,0,0.5)">
                                <th>Pembagi</th>
                                @foreach ($pembagi as $item)
                                    <th>{{ $item }}</th>
                                @endforeach
                            </tr>
                            <tr style="font-size: 12px">
                                <th>Pegawai</th>
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($item->matriks_ternormalisasi as $nilai)
                                        <td>{{ $nilai }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <h5>Matriks Keputusan Ternormalisasi & Terbobot</h5>
                    <table class="table table-hover table-compact">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>Pegawai</th>
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($item->matriks_terbobot as $nilai)
                                        <td>{{ $nilai }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <h5>Solusi Ideal Positif(Max) dan Solusi Ideal Negatif(Min)</h5>
                    <table class="table table-hover table-compact">
                        <tbody>
                            <tr>
                                <td style="font-weight: bold">Max</td>
                                @foreach ($max as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Min</td>
                                @foreach ($min as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <h5>D+ dan D-</h5>
                    <table class="table table-hover table-compact">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>Pegawai</th>
                                <th>D+</th>
                                <th>D-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->dPlus }}</td>
                                    <td>{{ $item->dMin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <h5>Hasil Preferensi</h5>
                    <table class="table table-hover table-compact">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>Rangking</th>
                                <th>Pegawai</th>
                                <th>Preferensi(V)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($pegawai->sortByDesc('preferensi') as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->preferensi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
