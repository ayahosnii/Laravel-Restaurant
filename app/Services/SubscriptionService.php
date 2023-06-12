<?php

namespace App\Services;

use App\Mail\CouponEmail;
use App\Models\admin\Subscriber;
use Illuminate\Support\Facades\Mail;

class SubscriptionService
{
    public function subscribeAndSendEmail($email, $userId)
    {
        $subscriber = Subscriber::where('email', $email)->first();

        if (!$subscriber) {
            $subscriber = new Subscriber();
            $subscriber->email = $email;
            $subscriber->user_id = $userId;
        }

        $coupon = $subscriber->assignCoupon();

        if ($coupon) {
            Mail::to($subscriber->email)->send(new CouponEmail($coupon));
            return 'success';
        } else {
            return 'error';
        }
    }
}
