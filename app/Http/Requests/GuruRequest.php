<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
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
            $nip_rules = 'required|string|size:10|unique:guru,nip,' . $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:guru,no_telp,' . $this->get('id');
        }
        else{
            $nip_rules = 'required|string|size:10|unique:guru,nip';
            $telepon_rules = 'sometimes|numeric|digits_between:10,15|unique:guru,no_telp';
        }

        return [
            'nip' => $nip_rules,
            'nama_guru' => 'required|string|max:30',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|in:L,P',
            'jabatan' => 'sometimes|nullable|string|max:20',
            'alamat' => 'required',
            'no_telp' => $telepon_rules,
            'email' => 'required|email',
            'foto' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:min_width=354,min_height=472',
        ];
    }
}
