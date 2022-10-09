<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'post_code' => 'required',
            'address' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email:strict,dns,spoof',
            'phone' => 'required',
            'store_id' => 'required', 'numeric', 'between:1,3'
        ];
    }
}
