<?php

namespace App\Services\Penjualan;

use App\Models\Penjualan;
use App\Repositories\Penjualan\PenjualanRepository;

class PenjualanService extends Penjualan{
    private PenjualanRepository $repository;

    public function __construct()
    {
        $this->repository = new Penjualan();
    }
}

