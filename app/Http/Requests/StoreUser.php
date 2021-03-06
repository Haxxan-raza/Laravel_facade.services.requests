<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreUser extends FormRequest
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
            'image' => 'required|mimes:jpg,jpeg,png',
        ];
    }


    public function messages()
    {
        return [
            
            'name.required' => 'Your name must be required now',
            'image.mimes' => 'Only .JPEG, .JPG and .PNG files are allowed'
        ];
    }
}
