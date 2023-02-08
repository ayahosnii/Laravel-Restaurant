<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    /**
     * Send verification SMS using Twilio
     *
     * @param string $to
     * @param string $message
     *
     * @return bool
     */
    public function sendSms(string $to, string $message): bool
    {
        $twilio = new Client(getenv('TWILIO_ACCOUNT_SID'), getenv('TWILIO_AUTH_TOKEN'));

        $message = $twilio->messages->create(
            $to,
            [
                'from' => getenv('TWILIO_PHONE_NUMBER'),
                'body' => $message
            ]
        );

        return $message->sid ? true : false;
    }
}
