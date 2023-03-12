<?php

namespace App\Services\Kendaraan;

use App\Repositories\Kendaraan\KendaraanRepository;

class KendaraanService
{
    private KendaraanRepository $KendaraanRepository;

    public function __construct(KendaraanRepository $KendaraanRepository)
    {
        $this->KendaraanRepository = $KendaraanRepository;
    }

    public function createKendaraan($request)
    {
        $data = $this->KendaraanRepository->createKendaraan($request);
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
    public function updateKendaraan($request, $id)
    {
        $data = $this->KendaraanRepository->updateKendaraan($request, $id);
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
