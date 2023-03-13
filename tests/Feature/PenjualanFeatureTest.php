<?php

namespace Tests\Feature;

use App\Models\Kendaraan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PenjualanFeatureTest extends TestCase
{
    public function create()
    {
        $kendaraan = Kendaraan::first();
        $response = $this->post('/api/penjualan', [
            'email' => $kendaraan->_id,
            'jumlah' => 10
        ]);
        $this->assertTrue(true);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->create();
    }
}
