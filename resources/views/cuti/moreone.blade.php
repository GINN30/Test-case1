@extends('layouts.app')

@section('content')
    <div class="container shadow px-3 py-3">
        <h1 class="mb-3">Daftar Karyawan yang Pernah Mengambil Cuti Lebih dari Satu Kali</h1>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Tanggal Cuti</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $karyawan)
                    @foreach($karyawan->cuti as $cuti)
                        <tr>
                            <td>{{ $karyawan->nomer_induk }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $cuti->tanggal_cuti }}</td>
                            <td>{{ $cuti->keterangan }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
