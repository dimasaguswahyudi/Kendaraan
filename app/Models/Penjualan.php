<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $collection = 'penjualans';
    protected $connection = 'mongodb';
    protected $fillable = [
        'kendaraan_id', 'jumlah'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class);
    }
}
