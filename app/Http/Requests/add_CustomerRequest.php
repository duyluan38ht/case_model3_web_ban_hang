<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_CustomerRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|numeric',
            'phone'=>'required|numeric',
            'address'=>'required',
        ];
    }public function messages()
{
     $messages=[
        'name.required'=>'*không được để trống',
        'email.required'=>'*không được để trống',
        'email.email'=>'*Email không hợp lệ',
        'password.required'=>'*không được để trống',
        'password.numeric'=>'*Vui lòng nhập số',
        'phone.required'=>'*không được để trống'    ,
        'phone.numeric'=>'*Vui lòng nhập số',
        'address.required'=>'*không được để trống',
    ];
     return $messages;
}
}
