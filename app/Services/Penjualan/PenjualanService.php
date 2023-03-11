<?php

namespace App\Services\Penjualan;

use Illuminate\Support\Facades\Log;
use App\Repositories\Penjualan\PenjualanRepository;

class PenjualanService{
    private PenjualanRepository $penjualanRepository;

    public function __construct(PenjualanRepository $penjualanRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
    }

    public function getAllPenjualan()
    {
        try {
            return $this->penjualanRepository->getAllPenjualan();
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
            return[];
        }
    }

    public function getPenjualan($kendaraan_id)
    {
        try {
            return $this->penjualanRepository->getPenjualan($kendaraan_id);
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
            return [];
        }
    }
}

