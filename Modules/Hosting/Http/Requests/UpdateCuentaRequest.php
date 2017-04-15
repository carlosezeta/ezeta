<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 22/11/2015
 * Time: 16:23
 */

namespace Modules\Hosting\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCuentaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'domain' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'disklimit' => 'required',
            'bwlimit' => 'required',
            'emailaccounts' => 'required',
            'ftpaccounts' => 'required',
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