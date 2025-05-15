<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\kaskecil;
use App\Models\kasbesar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class transactionsController extends Controller
{
    public function index()
    {
        $data = kaskecil::get();
        $data2 = kasbesar::get();

        return view('transactions', compact('data', 'data2'));
    }
}
