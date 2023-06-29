@extends('layouts.app')

@section('content')
    <div class="container shadow px-3 py-3">
        <h1 class="mb-3">Daftar Karyawan yang Pernah Mengambil Cuti</h1>

        <table class="table table-info table-striped">
            <thead>
                <tr>
                    <th>Nomer Induk</th>
                    <th>Nama</th>
                    <th>Tanggal Cuti</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($getAllcuti as $cuti)
                    <tr>
                        <td>{{ $cuti->karyawan->nomer_induk }}</td>
                        <td>{{ $cuti->karyawan->nama }}</td>
                        <td>{{ $cuti->tanggal_cuti }}</td>
                        <td>{{ $cuti->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
