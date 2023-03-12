<?php

namespace App\Repositories\Kendaraan;

use App\Models\Kendaraan;

//use Your Model

/**
 * Class KendaraanRepository.
 */
class KendaraanRepository
{
    protected $kendaraan;
    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function getAllKendaraan()
    {
        $data = $this->kendaraan->get();
        return $data;
    }

    public function createKendaraan($request)
    {
        $data = $this->kendaraan->create([
            'tahun_keluaran' => $request['tahun_keluaran'],
            'warna' => $request['warna'],
            'harga' => $request['harga'],
        ]);
        return $data;
    }
    public function updateKendaraan($request, $id)
    {
        $data = $this->kendaraan->find($id)->update([
            'tahun_keluaran' => $request['tahun_keluaran'],
            'warna' => $request['warna'],
            'harga' => $request['harga'],
        ]);
        return $data;
    }
}
