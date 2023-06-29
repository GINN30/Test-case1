<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function allcutis()
    {
        //
        $getAllcuti = Cuti::with(
            'karyawan'
        )->get();

        return view('cuti.getcuti', compact('getAllcuti'));
    }

    public function moreone()
    {
        $karyawan = Karyawan::has('cuti', '>', 1)->with('cuti')->get();

        return view('cuti.moreone', compact('karyawan'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cuti = Cuti::all();

        return view('cuti.index', compact('cuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cuti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nomer_induk' => 'required',
            'tanggal_cuti' => 'required|date',
            'lama_cuti' => 'required|integer',
            'keterangan' => 'required',
        ]);

        Cuti::create($request->all());

        return redirect()->route('cuti.index')->with('success', 'Data cuti berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuti $cuti)
    {
        //
        return view('cuti.show', compact('cuti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuti $cuti)
    {
        //
        return view('cuti.edit', compact('cuti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuti $cuti)
    {
        //
        $request->validate([
            'nomer_induk' => 'required',
            'tanggal_cuti' => 'required|date',
            'lama_cuti' => 'required|integer',
            'keterangan' => 'required',
        ]);

        $cuti->update($request->all());

        return redirect()->route('cuti.index')->with('success', 'Data cuti berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $cuti)
    {
        //
        $cuti->delete();

        return redirect()->route('cuti.index')->with('success', 'Data cuti berhasil dihapus.');
    }
}
