<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $collection = 'mobils';
    protected $connection = 'mongodb';
    protected $fillable = [
        'kendaraan_id', 'mesin', 'kapasitas_penumpang', 'tipe'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class);
    }
}
