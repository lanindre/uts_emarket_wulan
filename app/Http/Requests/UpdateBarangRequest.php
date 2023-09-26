<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatebarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'satuan' => 'required|string',
            'harga_jual' => 'required|numeric',
            'stok_barang' => 'required|integer',
            'ditarik' => 'required',
        ];
    }
}
