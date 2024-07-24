<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PDF;

class downloadController extends Controller
{
    public function index () {

        return view ('download');
    }

    public function invoice () {
        return view ('invoice');
    }

}
