<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Motor;
use App\Models\Kendaraan;
use App\Models\Penjualan;
use App\Repositories\Penjualan\PenjualanRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PenjualanController extends Controller
{
    private PenjualanRepositoryInterface $penjualanRepository;

    public function __construct(PenjualanRepositoryInterface $penjualanRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->penjualanRepository->getAllPenjualan()
        ]);
    }
}
