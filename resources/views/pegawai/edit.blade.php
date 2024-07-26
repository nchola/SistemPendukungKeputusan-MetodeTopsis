@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('pegawai.update', ['pegawai' => $pegawai->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Pegawai</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="nama" value="{{ old('nama', $pegawai->nama) }}"
                                        placeholder="Input Nama..." class="form-control" type="text">
                                    <small>{{ $errors->first('nama') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" value="{{ old('username', $pegawai->username) }}" placeholder="Input Username..."
                                        class="form-control" type="text">
                                    <small>{{ $errors->first('username') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" value="{{ old('password', $pegawai->password) }}" placeholder="Input Password..."
                                        class="form-control" type="password">
                                    <small>{{ $errors->first('password') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-Laki"
                                            {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>
                                            Laki-Laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                    <small>{{ $errors->first('jenis_kelamin') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}"
                                        class="form-control" type="date">
                                    <small>{{ $errors->first('tanggal_lahir') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" value="{{ old('alamat', $pegawai->alamat) }}"
                                        placeholder="Input Alamat..." class="form-control" type="text">
                                    <small>{{ $errors->first('alamat') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
