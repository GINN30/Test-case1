@extends('layouts')

@section('content')
    <div class="container">
        <h2>Tambah Cuti</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cuti.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nomer_induk">Nomer Induk:</label>
                <input type="text" name="nomer_induk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_cuti">Tanggal Cuti:</label>
                <input type="date" name="tanggal_cuti" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lama_cuti">Lama Cuti:</label>
                <input type="number" name="lama_cuti" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea name="keterangan" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
