<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Motor;
use App\Models\Kendaraan;
use App\Models\Penjualan;
use App\Services\Penjualan\PenjualanService;
use Illuminate\Http\Request;
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
}
