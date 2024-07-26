@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('sub_kriteria.create') }}" class="btn btn-primary mb-2">Tambah Sub Kriteria</a>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Data Sub Kriteria</h2>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-compact" id="dt">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria</th>
                                <th>Sub Kriteria</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($sub_kriteria as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->kriteria->nama_kriteria }}</td>
                                    <td>{{ $item->nama_sub_kriteria }}</td>
                                    <td>{{ $item->nilai }}</td>
                                    <td>
                                        <a href="{{ route('sub_kriteria.edit', ['sub_kriterium' => $item->id]) }}"
                                            class="btn btn-warning btn-sm text-white px-2 py-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <form action="{{ route('sub_kriteria.destroy', ['sub_kriterium' => $item->id]) }}"
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
