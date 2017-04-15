<?php

namespace Modules\Hosting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'disklimit' => 'required',
            'bwlimit' => 'required',
            'emailaccounts' => 'required',
            'ftpaccounts' => 'required',
            'paquete' => 'required',
            'description' => 'required',
            'server_id' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}