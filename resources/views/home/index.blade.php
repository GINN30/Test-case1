@extends('layouts.app')

@section('content')
    <div class="container-fluid my-5">
        <div class="d-grid gap-5 col-6 mx-auto">
           <a href="{{ route('karyawan.first_three') }}" class="btn btn-info">Tampilkan 3 Karyawan Pertama</a>
           <a href="{{ route('cuti.alldatas') }}" class="btn btn-danger">Tampilkan Karyawan yang pernah cuti saat ini</a>
           <a href="{{ route('cuti.moreone') }}" class="btn btn-success">Tampilkan Karyawan mengambil cuti lebih dari satu kali</a>
           <a href="{{ route('cuti.sisa') }}" class="btn btn-primary">Tampilkan Karyawan sisa cuti tiap karyawan </a>
        </div>
    </div>
@endsection
