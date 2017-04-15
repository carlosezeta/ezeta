<?php

namespace Modules\Hosting\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateCuentaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'domain' => 'required',
            'user_id' => 'required',
            'disklimit' => 'required',
            'bwlimit' => 'required',
            'server' => 'required',
            'paquete' => 'required',
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