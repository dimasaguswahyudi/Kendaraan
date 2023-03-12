<?php

namespace App\Repositories\Motor;

use App\Models\Motor;

//use Your Model

/**
 * Class MotorRepository.
 */
class MotorRepository
{
    protected $motor;
    public function __construct(Motor $motor)
    {
        $this->motor = $motor;
    }

    public function getAllMotor()
    {
        $data = $this->motor->get();
        return $data;
    }
    public function createMotor($request)
    {
        $data = $this->motor->create([
            'kendaraan_id' => $request['kendaraan_id'],
            'mesin' => $request['mesin'],
            'tipe_suspensi' => $request['tipe_suspensi'],
            'tipe_transmisi' => $request['tipe_transmisi'],
        ]);
        return $data;
    }
    public function updateMotor($request, $id)
    {
        $data = $this->motor->find($id)->update([
            'kendaraan_id' => $request['kendaraan_id'],
            'mesin' => $request['mesin'],
            'tipe_suspensi' => $request['tipe_suspensi'],
            'tipe_transmisi' => $request['tipe_transmisi'],
        ]);
        return $data;
    }

}
