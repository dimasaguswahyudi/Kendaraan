<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kendaraan_id' => 'required|exists:kendaraan,_id',
            'jumlah' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return[
            'kendaraan_id.required' => 'Kendaraan Wajib Disi',
            'kendaraan_id.exists' => 'Kendaraan Tidak Tersedia',
            'jumlah.required' => 'Kendaraan Wajib Disi',
            'jumlah.numeric' => 'Jumlah Harus Berupa Number',
        ];
    }
}
