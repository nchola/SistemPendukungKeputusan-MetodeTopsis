@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sub_kriteria.update', ['sub_kriterium' => $sub_kriteria->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Sub Kriteria</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kriteria</label>
                                    <select name="id_kriteria" class="form-control">
                                        @foreach ($kriteria as $k)
                                            <option value="{{ $k->id }}"
                                                {{ old('id_kriteria', $sub_kriteria->id_kriteria) == $k->id ? 'selected' : '' }}>
                                                {{ $k->nama_kriteria }}</option>
                                        @endforeach
                                    </select>
                                    <small>{{ $errors->first('id_kriteria') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Sub Kriteria</label>
                                    <input name="nama_sub_kriteria"
                                        value="{{ old('nama_sub_kriteria', $sub_kriteria->nama_sub_kriteria) }}"
                                        placeholder="Input Sub Kriteria..." class="form-control" type="text">
                                    <small>{{ $errors->first('nama_sub_kriteria') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <input name="nilai" value="{{ old('nilai', $sub_kriteria->nilai) }}"
                                        placeholder="Input Nilai..." class="form-control" type="number">
                                    <small>{{ $errors->first('nilai') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('sub_kriteria.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
