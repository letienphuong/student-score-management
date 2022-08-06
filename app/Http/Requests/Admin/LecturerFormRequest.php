<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LecturerFormRequest extends FormRequest
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

        $rules = [
            'magv' =>[
                'required',

            ]  ,
            'tengv' => [
                'required',
                'string'
            ],
            'ngaysinh' =>[
                'required',
            ],
            'gioitinh' => [
                'required'
            ],
            'hocham' =>[
                'required'
            ]
        ];
        return $rules;
    }
}
