<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PenjualanRequest;
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
        ]);
    }
    public function getPenjualan($kendaraan_id)
    {
        return response()->json([
            'data' => $this->penjualanService->getPenjualan($kendaraan_id)
        ]);
    }
    public function store(PenjualanRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
        $data = $this->penjualanService->store($request->all());
        return response()->json($data->original);
    }
}
