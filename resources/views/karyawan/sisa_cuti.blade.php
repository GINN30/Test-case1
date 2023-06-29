@extends('layouts.app')

@section('content')
    <div class="container shadow px-3 py-3">
        <h1 class="mb-3">Sisa Cuti Karyawan</h1>
        <table class="table table-primary table-striped">
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
                        <td>{{ $karyawan->sisa_cuti }} Hari</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
