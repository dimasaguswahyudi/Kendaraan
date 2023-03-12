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
    public function CreateStok($request)
    {
        try {
            $stok = $this->stokRepository->getStok($request)->toArray();
            if ($stok != null) {
                $data = [
                    'id' => $stok['_id'],
                    'jumlah' => $stok['jumlah'] - $request['jumlah']
                ];
                $return = $this->stokRepository->updateStok($data);
            }
            else{
                $return = $this->stokRepository->createStok($request);
            }
            return $return;
        } catch (\Exception $ex) {
            return $ex->getMessage();
            return [];
        }
    }

}

