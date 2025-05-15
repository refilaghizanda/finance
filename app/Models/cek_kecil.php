<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cek_kecil extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_cek',
        'tanggal',
        'kegiatan',
        'jumlah'
    ];

    protected $rules = [
        'jumlah' => 'required|numeric|max:2000000',
    ];
}
