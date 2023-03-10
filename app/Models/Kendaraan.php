<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Kendaraan extends Model
{
    use HasFactory;
    protected $collection = 'kendaraans';
    protected $connection = 'mongodb';
    protected $fillable = [
        'tahun_keluaran', 'warna', 'harga'
    ];

    public function motor()
    {
        return $this->hasOne(motor::class);
    }

    public function mobil()
    {
        return $this->hasOne(mobil::class);
    }

    public function stok()
    {
        return $this->hasOne(Stok::class);
    }

    public function penjualan()
    {
        return $this->hasMany(penjualan::class, 'kendaraan_id' ,'id');
    }




}
