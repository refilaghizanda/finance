<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\kaskecil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class kaskecilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kaskecil::get();

        return view('kas-kecil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kas-kecil');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'nobukti' => 'required',
            'tanggal' => 'required',
            'kategori' => ' ',
            'keterangan' => 'required',
            'nominal' => 'required|numeric|max:500000',

        ]);

        $kaskecil = new kaskecil;
        $kaskecil->no_bukti = $request->nobukti;
        $kaskecil->tanggal = $request->tanggal;
        $kaskecil->kategori = $request->kategori;
        $kaskecil->keterangan = $request->keterangan;
        $kaskecil->nominal_transaksi = $request->nominal;
        $kaskecil->save();

        return redirect('/kas-kecil')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the Kecil model instance with the given ID
        $data = kaskecil::find($id);

        // Delete the model instance
        $data->delete();

        // Redirect back to the previous page or display a success message
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
