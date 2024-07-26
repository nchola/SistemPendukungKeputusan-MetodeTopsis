@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('penilaian.create') }}" class="btn btn-primary mb-2">Tambah Penilaian</a>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Data Penilaian</h2>
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
                        <button class="btn btn-sm btn-primary px-3 py-2">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </form>
                    <table class="table table-hover table-compact" id="dt">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>No</th>
                                <th>Pegawai</th>
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->nama_kriteria }}</th>
                                @endforeach
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($item->penilaian as $penilaian)
                                        <td>{{ $penilaian->nilai }}</td>
                                    @endforeach
                                    <td>
                                        <a href="{{ route('penilaian.edit', ['penilaian' => $item->id]) }}?tahun={{ request()->get('tahun', date('Y')) }}"
                                            class="btn btn-warning btn-sm text-white px-2 py-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <form
                                            action="{{ route('penilaian.destroy', ['penilaian' => $item->id]) }}?tahun={{ request()->get('tahun', date('Y')) }}"
                                            onsubmit="return confirm('Apakah anda yakin? aksi tidak dapat dibatalkan!')"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm px-2 py-1">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $("#dt").DataTable({
                lengthChange: false
            });
        })
    </script>
@endpush
