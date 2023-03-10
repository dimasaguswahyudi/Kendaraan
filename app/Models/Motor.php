<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $collection = 'motors';
    protected $connection = 'mongodb';
    protected $fillable = [
        'kendaraan_id', 'mesin', 'tipe_suspensi', 'tipe_transmisi'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class);
    }
}
