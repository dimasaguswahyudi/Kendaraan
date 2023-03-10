<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $collection = 'stoks';
    protected $connection = 'mongodb';
    protected $fillable = [
        'kendaraan_id', 'jumlah'
    ];
}
