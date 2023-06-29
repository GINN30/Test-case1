@extends('layouts.app')

@section('content')
    <div>
        <h1>Daftar Karyawan yang Pernah Mengambil Cuti</h1>

        <table>
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
