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

    public function sendSms($phone, $message, $language = 'en', $model = null)
    {
        $params = [
            'account_sid' =>  getenv("TWILIO_SID"),
            'auth_token' => getenv("TWILIO_TOKEN"),
            'SMSText' => $message,
            'SMSLang' => $language == 'ar' ? 'A' : 'E',
            'twilio_number ' => getenv("TWILIO_FROM"),
            'SMSReceiver' => $phone,
        ];

        try {
            $smsURL = "https://smsvas.vlserv.com/KannelSending/service.asmx/SendSMS";

            $response = $this->client->post($smsURL, ['form_params' => $params ]);
            $content = $response->getBody();

            $xml = (array) simplexml_load_string($content);

            if ($xml[0] == '0') {
                return true;
            } else {

                info("VictoryLink error status!");  // log
                return false;
            }
        } catch (\Exception $e) {
            info("VictoryLink has been trying to send sms to $phone but operation failed !");
            return false;
        }
    }


}
