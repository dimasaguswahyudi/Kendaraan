<?php

namespace App\Services\Motor;

use App\Repositories\Motor\MotorRepository;

class MotorService {
    private MotorRepository $motorRepository;
    public function __construct(MotorRepository $motorRepository)
    {
        $this->motorRepository = $motorRepository;
    }

    public function getAllMotor()
    {
        return $this->motorRepository->getAllMotor();
    }
    public function createMotor($request)
    {
        $data = $this->motorRepository->createMotor($request);
        if ($data == true) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Data Berhasil Ditambahkan',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'code' => 400,
                'message' => 'Data Gagal Ditambahkan',
            ], 400);
        }
    }
    public function updateMotor($request, $id)
    {
        $data = $this->motorRepository->updateMotor($request, $id);
        if ($data == true) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Data Berhasil Diupdate',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'code' => 400,
                'message' => 'Data Gagal Diupdate',
            ], 400);
        }
    }
}
