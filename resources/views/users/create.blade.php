@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Tambah Pengguna</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="nama" value="{{ old('nama') }}" placeholder="Input Nama..."
                                        class="form-control" type="text">
                                    <small>{{ $errors->first('nama') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                        <option value="Kepala Manajer"
                                            {{ old('role') == 'Kepala Manajer' ? 'selected' : '' }}>
                                            Kepala Manajer
                                        </option>
                                        <option value="HRD" {{ old('role') == 'HRD' ? 'selected' : '' }}>HRD</option>
                                    </select>
                                    <small>{{ $errors->first('role') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" value="{{ old('username') }}" placeholder="Input Username..."
                                        class="form-control" type="text">
                                    <small>{{ $errors->first('username') }}</small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" value="{{ old('password') }}" placeholder="Input Password..."
                                        class="form-control" type="password">
                                    <small>{{ $errors->first('password') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
