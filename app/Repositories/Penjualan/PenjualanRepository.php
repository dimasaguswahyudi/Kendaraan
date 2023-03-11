<?php

namespace App\Repositories\Penjualan;

use App\Models\Penjualan;
use App\Repositories\Penjualan\PenjualanRepositoryInterface;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PenjualanRepository.
 */
class PenjualanRepository implements PenjualanRepositoryInterface
{
    protected $penjualan;
    /**
     * @return string
     *  Return the model
     */
    public function __construct(Penjualan $penjualan)
    {
        $this->penjualan = $penjualan;
    }

    public function getAllPenjualan()
    {
        return $this->penjualan->with('kendaraan')->get();
    }


}
