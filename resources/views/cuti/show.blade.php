@extends('layouts')

@section('content')
    <div class="container">
        <h2>Detail Cuti</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nomer Induk: {{ $cuti->nomer_induk }}</h5>
                <p class="card-text">Tanggal Cuti: {{ $cuti->tanggal_cuti }}</p>
                <p class="card-text">Lama Cuti: {{ $cuti->lama_cuti }}</p>
                <p class="card-text">Keterangan: {{ $cuti->keterangan }}</p>
                <p class="card-text">Dibuat: {{ $cuti->created_at }}</p>
                <p class="card-text">Diperbarui: {{ $cuti->updated_at }}</p>
                <a href="{{ route('cuti.edit', $cuti->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('cuti.destroy', $cuti->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection
