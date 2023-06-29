@extends('layouts')

@section('content')
    <div class="container">
        <h2>Tambah Karyawan</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nomer_induk">Nomer Induk</label>
                <input type="text" class="form-control" id="nomer_induk" name="nomer_induk" value="{{ old('nomer_induk') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir') }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_bergabung">Tanggal Bergabung</label>
                <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung"
                    value="{{ old('tanggal_bergabung') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
