<?php

namespace App\Http\Controllers;

use App\Models\kaskecil;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class kaskecilController extends Controller
{
    public function index () {

        $data = kaskecil::get();

        return view ('kas-kecil', compact('data'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'no_bukti' => ['required', 'max:50'],
            'tanggal' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'kategori' => ['required', 'min:5', 'max:20'],
            'keterangan' => ['required'],
            'nominal_transaksi' => ['required']
        ]);
    }
}
