<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // display 3 karyawan yang pertama kali bergabung
    public function firstThree()
    {
        $karyawan = Karyawan::orderBy('tanggal_bergabung')->limit(3)->get();
        return view('karyawan.first_three', compact('karyawan'));
    }
    // menampilkan sisa cuti yang dimiliki oleh karyawan
    public function sisaCuti()
    {
        $karyawan = Karyawan::with('cuti')
            ->select('nomer_induk', 'nama')
            ->get()
            ->map(function ($karyawan) {
                $sisaCuti = 12 - $karyawan->cuti->sum('lama_cuti');
                $karyawan->sisa_cuti = $sisaCuti > 0 ? $sisaCuti : 0;
                return $karyawan;
            });

        return view('karyawan.sisa_cuti', compact('karyawan'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
