@extends('layouts.app')

@section('content')
    <div>
        <h1>Sisa Cuti Karyawan</h1>
        <table>
            <thead>
                <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Sisa Cuti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $karyawan)
                    <tr>
                        <td>{{ $karyawan->nomer_induk }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->sisa_cuti }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
