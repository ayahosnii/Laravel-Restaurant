<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    public function __construct()
    {

    }


    public function get_activate_phone(){


        if (!auth('provider')->check()) {
            return redirect('/login');
        }

        if (auth('provider')->user()->phoneactivated == "1"){
            return redirect('/providers/dashboard');
        }




    $data['title'] = "تأكيد رقم الهاتف";
    $data['class'] = "page-template password recovery";


    return view("auth.verification", $data);

}

    public function store_verification_code(Request $request)
    {
        $rules = ["code" => "required"];
        $messages = [
            "required" => trans("messages.required"),
        ];
        $this->validate($request, $rules, $messages);
        $code = $request->code;
        $hash = json_decode(auth('provider')->user()->active_phone_hash);
        if ($hash->code != $code){
            return redirect()->back()->with("error", trans("messages.register.active.notMatch"));
        }

        DB::table("provider")
            ->where("id", auth('provider'))
            ->where("id", auth('provider')->id())
            ->update([
                "phoneactived" => "1",
                "activate_phone_hash" => ""
            ]);

        return redirect()->back();

    }

}
