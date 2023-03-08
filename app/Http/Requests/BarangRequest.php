<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BarangRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rulebarang = Rule::unique('masterbarangs', 'kode_barang');
        if ($this->method() !== 'POST') {
            $rulebarang->ignore($this->route()-> parameter('kode_barang'));
        }
        return  [
            'kode_barang' =>['required', $rulebarang],
            'nama_barang' =>['required'],
            'qty' =>['required'],
            'harga_beli' =>['required'],
            'harga_jual' =>['required'],
            'tanggal' =>['required'],
            'nama_kategori' =>['required'],
            'nama_satuan' =>['required']
        ];
    }


    public function messages()
    {
        return [
            'required' => 'Isian :attribute harus diisi'
        ];
    }
}
