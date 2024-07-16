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

    // Define relationship with User model (assuming a User model exists)
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id');
    // }
}
