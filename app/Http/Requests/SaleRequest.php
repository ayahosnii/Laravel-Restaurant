<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'percentage'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'هذا الحقل مطلوب',
            'code.unique' => 'الكود مستخدم من قبل',
            'value.numeric' => 'القيمة لا بد أن تكون أرقام',
            'cart_value.numeric' => 'القيمة لا بد أن تكون أرقام'
        ];
    }
}
