<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
        if($this->method() == 'PATCH'){
            $nis_rules = 'required|string|size:10|unique:siswa,nis,' . $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:siswa,no_telp,' . $this->get('id');
        }
        else{
            $nis_rules = 'required|string|size:10|unique:siswa,nis';
            $telepon_rules = 'sometimes|numeric|digits_between:10,15|unique:siswa,no_telp';
        }

        return [
            'nis' => $nis_rules,
            'nama_siswa' => 'required|string|max:30',
            'tgl_lahir' => 'required|date',
            'id_kelas' => 'required',
            'jk' => 'required|in:L,P',
            'alamat' => 'required',
            'no_telp' => $telepon_rules,
            // 'eskul' => 'accepted',
            'foto' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:min_width=354,min_height=472',
        ];
    }
}
