@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('penilaian.update', ['penilaian' => $id]) }}?tahun={{ request()->get('tahun') }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Penilaian</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tahun</label>
                                <select name="tahun" class="form-control">
                                    @for ($i = 2020; $i < 2040; $i++)
                                        <option {{ $i == old('tahun', request()->get('tahun')) ? 'selected' : '' }}
                                            value="{{ $i }}">{{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <small class="text-danger">{{ $errors->first('tahun') }}</small>
                            </div>
                            <div class="col-md-6">
                                <label>Pegawai</label>
                                <select name="id_pegawai" class="form-control">
                                    @foreach ($pegawai as $item)
                                        <option {{ $item->id == old('id_pegawai', $id) ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-danger">{{ $errors->first('id_pegawai') }}</small>
                            </div>
                        </div>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    @foreach ($kriteria as $item)
                                        <th>{{ $item->nama_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($kriteria as $item)
                                        <td>
                                            <input type="hidden" name="id_kriteria[]" value="{{ $item->id }}">
                                            <select name="nilai[]" class="form-control" required>
                                                @foreach ($item->sub_kriteria as $sub_kriteria)
                                                    <option value="{{ $sub_kriteria->nilai }}"
                                                        {{ $sub_kriteria->nilai == $penilaian[$i]->nilai ? 'selected' : '' }}>
                                                        {{ $sub_kriteria->nama_sub_kriteria }}</option>
                                                @endforeach
                                                @php
                                                    $i++;
                                                @endphp
                                            </select>
                                            {{-- <input type="number" name="nilai[]" value="{{ $penilaian[$i++]->nilai }}"
                                                placeholder="Input Nilai..." class="form-control" required min="1"
                                                max="5"> --}}
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    @if ($errors->has('message'))
        <script>
            alert('{{ $errors->first('message') }}')
        </script>
    @endif
@endpush
