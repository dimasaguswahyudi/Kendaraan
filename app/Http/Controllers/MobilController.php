<?php

namespace App\Http\Controllers;

use App\Http\Requests\MobilRequest;
use App\Services\Mobil\MobilService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    private MobilService $mobilService;

    public function __construct(MobilService $mobilService)
    {
        $this->mobilService = $mobilService;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->mobilService->getAllMobil()
        ], 200);
    }

    public function store(MobilRequest $request): JsonResponse
    {
        return $this->mobilService->createMobil($request->all());
    }

    public function update(MobilRequest $request, $id): JsonResponse
    {
        return $this->mobilService->updateMobil($request->all(), $id);
    }

}
