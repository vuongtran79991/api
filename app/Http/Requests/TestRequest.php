<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'toan'=>'required',
            'ly'=>'required',
            'hoa'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Please enter name',
            'toan.required'=>'Please enter toan',
            'ly.required'=>'Please enter ly',
            'hoa.required'=>'Please enter hoa'

        ];
    }
}
