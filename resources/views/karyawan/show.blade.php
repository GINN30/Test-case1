@extends('layouts')

@section('content')
    <div class="container">
        <h2>Detail Karyawan</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $karyawan->nama }}</h5>
                <p class="card-text"><strong>Nomer Induk:</strong> {{ $karyawan->nomer_induk }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $karyawan->alamat }}</p>
                <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $karyawan->tanggal_lahir }}</p>
                <p class="card-text"><strong>Tanggal Bergabung:</strong> {{ $karyawan->tanggal_bergabung }}</p>
            </div>
        </div>

        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
