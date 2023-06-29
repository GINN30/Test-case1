@extends('layouts')

@section('content')
    <div class="container">
        <h2>Daftar Cuti</h2>
        <a href="{{ route('cuti.create') }}" class="btn btn-primary mb-3">Tambah Cuti</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nomer Induk</th>
                    <th>Tanggal Cuti</th>
                    <th>Lama Cuti</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuti as $c)
                    <tr>
                        <td>{{ $c->nomer_induk }}</td>
                        <td>{{ $c->tanggal_cuti }}</td>
                        <td>{{ $c->lama_cuti }}</td>
                        <td>{{ $c->keterangan }}</td>
                        <td>
                            <a href="{{ route('cuti.show', $c->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('cuti.edit', $c->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('cuti.destroy', $c->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
