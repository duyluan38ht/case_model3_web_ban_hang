<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_productRequest extends FormRequest
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
        return [
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'note' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => '*Không được để trống',
            'price.required' => '*Không được để trống',
            'price.numeric' => '*Vui lòng nhập vào số',
            'quantity.required' => '*Không được để trống',
            'quantity.numeric' => '*Vui lòng nhập vào số',
            'note.required'=>'*Không được để trống'
        ];
        return $messages;
    }
}
