<?php

namespace App\Http\Controllers;

use App\Http\Requests\StokRequest;
use App\Services\Stok\StokService;
use Illuminate\Http\Request;

class StokController extends Controller
{
    private StokService $stokService;
    public function __construct(StokService $stokService)
    {
        $this->stokService = $stokService;
    }

    public function index()
    {
        $data = $this->stokService->getAllStok();
        return response()->json([
            'data' => $data
        ], 200);
    }
    public function store(StokRequest $request)
    {
        return $this->stokService->CreateStok($request->all());
    }
}
