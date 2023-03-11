<?php

namespace App\Repositories\Stok;

use App\Models\Stok;

//use Your Model

/**
 * Class StokRepository.
 */
class StokRepository
{
    protected $stok;
    /**
     * @return string
     *  Return the model
     */
    public function __construct(Stok $stok)
    {
        $this->stok = $stok;
    }

    public function getStok($request)
    {
        $data = $this->stok->where('kendaraan_id', $request['kendaraan_id'])->first();
        return $data->jumlah;
    }
}
