@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('kriteria.store') }}" method="POST">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Tambah Kriteria</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kriteria</label>
                                    <input name="nama_kriteria" value="{{ old('nama_kriteria') }}"
                                        placeholder="Input Kriteria..." class="form-control" type="text">
                                    <small>{{ $errors->first('nama_kriteria') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bobot</label>
                                    <input name="bobot" value="{{ old('bobot') }}" placeholder="Input Bobot..."
                                        class="form-control" type="number">
                                    <small>{{ $errors->first('bobot') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
