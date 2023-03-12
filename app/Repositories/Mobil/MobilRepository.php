<?php

namespace App\Repositories\Mobil;

use App\Models\Mobil;

//use Your Model

/**
 * Class MobilRepository.
 */
class MobilRepository
{
    protected $mobil;
    public function __construct(Mobil $mobil)
    {
        $this->mobil = $mobil;
    }
    public function getAllMobil()
    {
        $data = $this->mobil->get();
        return $data;
    }
    public function createMobil($request)
    {
        $data = $this->mobil->create([
            'kendaraan_id' => $request['kendaraan_id'],
            'mesin' => $request['mesin'],
            'kapasitas_penumpang' => $request['kapasitas_penumpang'],
            'tipe' => $request['tipe'],
        ]);
        return $data;
    }
    public function updateMobil($request, $id)
    {
        $data = $this->mobil->find($id)->update([
            'kendaraan_id' => $request['kendaraan_id'],
            'mesin' => $request['mesin'],
            'kapasitas_penumpang' => $request['kapasitas_penumpang'],
            'tipe' => $request['tipe'],
        ]);
        return $data;
    }

}
