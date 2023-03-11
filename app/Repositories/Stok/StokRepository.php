<?php

namespace App\Repositories\Stok;

use App\Models\Stok;
use Illuminate\Support\Arr;

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
        return $data;
    }
    public function updateStok($data)
    {
        $data = $this->stok->find($data['id'])->update([
            'jumlah' => $data['jumlah']
        ]);
        return $data;
    }
}
