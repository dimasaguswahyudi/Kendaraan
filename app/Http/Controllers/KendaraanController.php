<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\KendaraanRequest;
use App\Services\Kendaraan\KendaraanService;

class KendaraanController extends Controller
{
    private KendaraanService $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->kendaraanService->getAllKendaraan()
        ], 200);
    }
    public function store(KendaraanRequest $request): JsonResponse
    {
        return $this->kendaraanService->createKendaraan($request->all());
    }
    public function update(KendaraanRequest $request, $id)
    {
        return $this->kendaraanService->updateKendaraan($request->all(), $id);
    }
}
