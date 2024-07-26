@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-2">Tambah Pegawai</a>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Data Pegawai</h2>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-compact" id="dt">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
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
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.edit', ['pegawai' => $item->id]) }}"
                                            class="btn btn-warning btn-sm text-white px-2 py-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <form action="{{ route('pegawai.destroy', ['pegawai' => $item->id]) }}"
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
