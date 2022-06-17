<?php

namespace App\Http\Requests\providers;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRegisterRequest extends FormRequest
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
            'name'                      => 'required',
            'email'                     => 'required|email',
            'mobile'                    => 'required|numeric',
         /*   'province'                  => 'required',
            'city'                      => 'required',*/
            'address'                   => 'required',
            'password'                  => 'required',
            "provider-ar-details"       => "required",
            "provider-en-details"       => "required",
            "image"                     => "required"
        ];

        $msg = [
            1  => trans("messages.required"),
            2  => trans("messages.success"),
            7  => trans("messages.phone_numeric"),
            8  => trans("messages.email"),
            10 => trans("messages.email_unique"),
            11 => trans("messages.phone_unique"),
            12 => trans("messages.success"),
            ];


        $messages = [
            "name.required"                      =>  $msg[1],
            "province.required"                                 =>  $msg[1],
            "city.required"                                    =>  $msg[1],
            "mobile.required"                            =>  $msg[1],
            "email.required"                                   =>  $msg[1],
            "password.required"                                =>  $msg[1],
            "provider-ar-details.required"                     =>  $msg[1],
            "provider-en-details.required"                     =>  $msg[1],
            "image.required"                                   =>  $msg[1],
            "service-provider.exists"                          =>  $msg[1],
            "automatic-list.in"             => ' لابد من اختيار الخدمات المطلوبة ',
            "accept-online-payment.in"      => $msg[1],
            "accept-order.in"               => $msg[1],
            "province.exists"                =>$msg[1],
            "city.exists"                   => $msg[1],
            "mobile.numeric"          => trans("messages.phone_numeric"),
            "email.email"                   => trans("messages.email_r"),
            "password.min"                  =>'كلمة المرور اقل من 6 احرف',
            "email.unique"                  => trans("messages.email_unique"),
            "mobile.unique"           => trans("messages.phone_unique"),
        ];
    }
}
