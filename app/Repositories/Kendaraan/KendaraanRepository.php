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
        return $this->kendaraan->create($request);
    }
    public function updateKendaraan($request, $id)
    {
        $data = $this->kendaraan->find($id)->update($request);
        return $data;
    }
}
