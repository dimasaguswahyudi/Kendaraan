<?php

namespace App\Services\Mobil;

use App\Repositories\Kendaraan\KendaraanRepository;
use App\Repositories\Mobil\MobilRepository;
use Illuminate\Support\Facades\Log;
use App\Repositories\Penjualan\PenjualanRepository;
use App\Repositories\Stok\StokRepository;

class MobilService{
    private MobilRepository $mobilRepository;
    private KendaraanRepository $kendaraanRepository;
    public function __construct(MobilRepository $mobilRepository, KendaraanRepository $kendaraanRepository)
    {
        $this->mobilRepository = $mobilRepository;
        $this->kendaraanRepository = $kendaraanRepository;
    }
    public function getAllMobil()
    {
        return $this->mobilRepository->getAllMobil();
    }
    public function createMobil($request)
    {
        $data = $this->mobilRepository->createMobil($request);
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
    public function updateMobil($request, $id)
    {
        $data = $this->mobilRepository->updateMobil($request, $id);
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

