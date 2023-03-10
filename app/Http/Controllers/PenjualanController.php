<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Motor;
use App\Models\Penjualan;
use App\Models\Stok;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $data = Kendaraan::with('mobil', 'motor', 'stok')->get();
        // $data = Stok::with('kendaraan')->get();
        return response()->json($data, 200);
    }
}
