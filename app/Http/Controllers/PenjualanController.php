<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
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
    public function getPenjualan($kendaraan_id)
    {
        return response()->json([
            'data' => $this->penjualanService->getPenjualan($kendaraan_id)
        ], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kendaraan_id' => 'required|exists:kendaraans,_id',
            'jumlah' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $data = $this->penjualanService->store($request->all());
        return response()->json($data->original, 200);
    }
}
