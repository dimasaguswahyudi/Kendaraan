<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenjualanRequest;
use Illuminate\Http\JsonResponse;
use App\Services\Penjualan\PenjualanService;

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
        ], 200);
    }
    public function getPenjualan($kendaraan_id): JsonResponse
    {
        return response()->json([
            'data' => $this->penjualanService->getPenjualan($kendaraan_id)
        ], 200);
    }
    public function store(PenjualanRequest $request): JsonResponse
    {
        $data = $this->penjualanService->store($request->all());
        return response()->json($data->original, 200);
    }
}
