<?php

namespace App\Http\Controllers\Apis\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function echo_Empty(){
        return "";
    }

    public function sendActivationPhone($id)
    {
        $user = User::find($id);
        $code = $this->generate_random_number(4);
        $user->activate_phone_hash = json_encode([
            'code' => $code,
            'expiry' => Carbon::now()->addDay(1)->timestamp
            ]);
        $user->save();
        $message = (App()->getLocale() == "en")?
            "Your Activation Code Is : " . $code :
            $code . "رقم كود التفعيل الخاص بك هو : ";
        (new SmsController())->send($message, $user->mobile);
    }

    public function generate_random_number($digits)
    {
        return rand(pow(10, $digits-1), pow(10, $digits)-1);
    }

   public function setLang($lang)
   {
       ($lang == "en") ? App()->setLocale("en"): App()->setLocale("ar");
   }


    function get_token($length)
    {
        $characters = '0123456789qwertyuiopasdfghjklzxcvbbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

}
