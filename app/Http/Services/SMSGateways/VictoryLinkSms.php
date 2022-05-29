<?php

namespace App\Http\Services\SMSGateways;

use App\Models\User;
use http\Client;

class VictoryLinkSms
{
    public $client;

    public function __construct()
    {
        if (!$this->user) {
            $this -> user = new User();
        }
    }

    public function sendSms($phone, $message, $type = 'non_survey', $language = 'en', $model = null)
    {
        $parents = [
           'UserName' => config('sms.VICTORY_LINK.USERNAME'),
           'Password' => config('sms.VICTORY_LINK.PASSWORD'),
            'SMSText' => $message,
            'SMSLang' => $language == 'ar' ? 'A' : 'E',
            'SMSSender' => config('sms.VICTORY_LINK.PASSWORD'),
            'SMSRecevier' => $phone
        ];

        try {
           $smsURL = "http://smsvas.vierv.com/kannelSending/service.asmx/SendSMS";
           $response = $this->user->post($smsURL, ['form_params' => $parents]);
           $content = $response->getBody();
        }catch (\Exception $exception){

        }
    }

}
