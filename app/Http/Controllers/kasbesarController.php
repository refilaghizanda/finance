<?php

namespace App\Http\Controllers;

use App\Models\kasbesar;
use Illuminate\Http\Request;

class kasbesarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kasbesar::get();

        return view ('kas-besar', compact('data'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kas-besar');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request){
        $request->validate([
            'nobukti' => 'required',
            'tanggal' => 'required',
            'kategori' => ' ',
            'keterangan' => 'required',
            'nominal' => 'required',
            
        ]);
    
        $kasbesar = new kasbesar;
        $kasbesar->no_bukti = $request->nobukti;
        $kasbesar->tanggal = $request->tanggal;
        $kasbesar->kategori = $request->kategori;
        $kasbesar->keterangan = $request->keterangan;
        $kasbesar->nominal_transaksi = $request->nominal;
        $kasbesar->save();

        return redirect('/kas-kecil')->with('success','Data berhasil ditambahkan!');
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
        // Find the Besar model instance with the given ID
        $data = kasbesar::find($id);

        // Delete the model instance
        $data->delete();

        // Redirect back to the previous page or display a success message
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}

