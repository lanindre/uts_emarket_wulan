<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePelangganRequest extends FormRequest
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
            'nama_pelanggan' =>['required','string'],
            'alamat'=>['required','string'],
            'no_hp'=>['required','integer'],
            'jenis_kelamin'=>['required','in:Laki-laki,Perempuan'],
        ];
    }
    public function messages()
    {
        return[
        'nama_pelanggan.required' => 'Data Nama belum diisi!',
        'alamat.required'=>'Alamat belum diisi!',
        'no_hp.required'=>'No Telepon belum diisi',
        'jenis_kelamin.required'=>'Jenis Kelamin belum diisi!',
        ];
    }
       
}
