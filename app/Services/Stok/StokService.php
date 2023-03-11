<?php

namespace App\Services\Stok;

use App\Models\Stok;
use Illuminate\Support\Facades\Log;
use App\Repositories\Stok\StokRepository;

class StokService{
    private StokRepository $stokRepository;

    public function __construct(StokRepository $stokRepository)
    {
        $this->stokRepository = $stokRepository;
    }

    public function getAllStok()
    {
        try {
            return $this->stokRepository->getAllStock();
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
            return[];
        }
    }

}

