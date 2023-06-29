@extends('layouts.app')

@section('content')
    <div class="container shadow px-3 py-3">
        <h1 class="mb-3">Tiga Karyawan Pertama Perusahaan</h1>

        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $index => $employee)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $employee->nomer_induk }}</td>
                        <td>{{ $employee->nama }}</td>
                        <td>{{ $employee->alamat }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->tanggal_bergabung }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
