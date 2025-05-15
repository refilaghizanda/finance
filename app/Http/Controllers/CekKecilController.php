<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\cek_kecil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class CekKecilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cek_kecil::get();

        return view('transactions', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $cek =  cek_kecil::latest()->first();
        // $kodetmp  = "SBY";
        // $kodetahun = date("d-Y");

        // if ($cek == null) {
        //     $nourut = "001";
        // } else {
        //     $nourut = substr($cek->nocek, 9, 3) + 1;
        //     $nourut = "00" . $nourut;
        // }

        // $kodecek = $kodetmp . $kodetahun . $nourut;
        // $requestData = $request->validated();
        // $requestData['no_cek'] = $kodecek;
        // cek_kecil::create($requestData);

        $request->validate([
            'nocek' => 'required',
            'tanggal' => 'required',
            'kegiatan' => 'required',
            'jumlah' => 'required|numeric|max:2000000',

        ]);

        $cek_kecil = new cek_kecil;
        $cek_kecil->no_cek = $request->nocek;
        $cek_kecil->tanggal = $request->tanggal;
        $cek_kecil->kegiatan = $request->kegiatan;
        $cek_kecil->jumlah = $request->jumlah;
        $cek_kecil->save();

        return redirect('/transactions')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(cek_kecil $cek_kecil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = cek_kecil::find($id);

        return view('ck.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = cek_kecil::find($id);
        $data->update($request->all());
        return redirect()->route('ck.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = cek_kecil::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
