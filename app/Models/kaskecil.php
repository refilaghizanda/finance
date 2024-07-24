<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kaskecil extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_bukti',
        'tanggal',
        'kategori',
        'keterangan',
        'nominal_transaksi'
    ];

    protected $rules = [
        'nominal_transaksi' => 'required|numeric|max:500000',
    ];
}
