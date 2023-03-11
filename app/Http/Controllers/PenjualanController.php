<?php

namespace App\Http\Controllers;

use App\Services\Penjualan\PenjualanService;
use Illuminate\Http\JsonResponse;

class PenjualanController extends Controller
{
    private PenjualanService $penjualanService;

    public function __construct(PenjualanService $penjualanService)
    {
        $this->penjualanService = $penjualanService;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->penjualanService->getAllPenjualan()
        ]);
    }
    public function getPenjualan($kendaraan_id)
    {
        return response()->json([
            'data' => $this->penjualanService->getPenjualan($kendaraan_id)
        ]);
    }
}
