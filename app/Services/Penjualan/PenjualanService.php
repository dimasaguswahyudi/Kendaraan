<?php

namespace App\Services\Penjualan;

use App\Models\Stok;
use Illuminate\Support\Facades\Log;
use App\Repositories\Penjualan\PenjualanRepository;
use App\Repositories\Stok\StokRepository;

class PenjualanService{
    private PenjualanRepository $penjualanRepository;
    private StokRepository $stokRepository;

    public function __construct(PenjualanRepository $penjualanRepository, StokRepository $stokRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
        $this->stokRepository = $stokRepository;
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

    public function store($request)
    {
        try {
            $stok = $this->stokRepository->getStok($request);
            if ($request['jumlah'] > $stok->jumlah) {
                return response()->json([
                    'success' => false,
                    'code' => 400,
                    'message' => 'Penjualan Barang Melebihi Stok'
                ], 400);
            }
            else{
                $return = $this->penjualanRepository->store($request);
                $data = [
                    'id' => $stok->_id,
                    'jumlah' => $stok->jumlah - $return['jumlah']
                ];
                $this->stokRepository->updateStok($data);
                return response()->json([
                    'success' => true,
                    'code' => 200,
                    'message' => 'Penjualan Berhasil Ditambahkan'
                ], 200);
            }
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
            return [];
        }
    }
}

