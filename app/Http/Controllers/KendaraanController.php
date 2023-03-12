<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KendaraanRequest;
use App\Services\Kendaraan\KendaraanService;
use Illuminate\Http\JsonResponse;

class KendaraanController extends Controller
{
    private KendaraanService $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }

    public function store(KendaraanRequest $request): JsonResponse
    {
        $data = $this->kendaraanService->createKendaraan($request->all());
        return response()->json($data);
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        // $data = $this->kendaraanService->updateKendaraan($request->all());
        // return response()->json($data);
    }
}
