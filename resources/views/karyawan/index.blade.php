@extends('layouts')

@section('content')
    <div class="container">
        <h2>Daftar Karyawan</h2>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nomer Induk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $k)
                    <tr>
                        <td>{{ $k->nomer_induk }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>{{ $k->tanggal_lahir }}</td>
                        <td>{{ $k->tanggal_bergabung }}</td>
                        <td>
                            <a href="{{ route('karyawan.show', $k->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('karyawan.edit', $k->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
