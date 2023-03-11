<?php

namespace App\Services\Penjualan;

use App\Repositories\Penjualan\PenjualanRepository;

class PenjualanService{
    private PenjualanRepository $penjualanRepository;

    public function __construct(PenjualanRepository $penjualanRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
    }

    public function getAllPenjualan()
    {
        return $this->penjualanRepository->getAllPenjualan();
    }
}

