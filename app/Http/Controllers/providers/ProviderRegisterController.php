<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Apis\User\GeneralController;
use App\Http\Controllers\Apis\User\SmsController;
use App\Http\Controllers\Controller;
use App\Http\Requests\providers\ProviderRegisterRequest;
use App\Provider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\providers\ProviderRegister;

class ProviderRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                      => 'required',
            'email'                     => 'required|email',
            'mobile'                    => 'required|numeric',
            /*   'province'                  => 'required',
               'city'                      => 'required',*/
            'address'                   => 'required',
            'password'                  => 'required',
            "ar_details"                => "required",
            "en_details"                => "required",
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
            "phone.required"                            =>  $msg[1],
            "email.required"                                   =>  $msg[1],
            "password.required"                                =>  $msg[1],
            "ar_details.required"                     =>  $msg[1],
            "en_details.required"                     =>  $msg[1],
            "image.required"                                   =>  $msg[1],
            "service-provider.exists"                          =>  $msg[1],
            "automatic-list.in"             => ' لابد من اختيار الخدمات المطلوبة ',
            "accept-online-payment.in"      => $msg[1],
            "accept-order.in"               => $msg[1],
            "province.exists"                =>$msg[1],
            "city.exists"                   => $msg[1],
            "phone.numeric"          => trans("messages.phone_numeric"),
            "email.email"                   => trans("messages.email_r"),
            "password.min"                  =>'كلمة المرور اقل من 6 احرف',
            "email.unique"                  => trans("messages.email_unique"),
            "phone.unique"           => trans("messages.phone_unique"),
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $code = (new GeneralController())->generate_random_number(4);
        $token = (new GeneralController())->get_token(128);


        $hash = json_encode([
            'code' => $code,
            'type' => 'phone-activation',
            'expiry' => Carbon::now()->addDay(1)->timestamp,
        ]);

        $message = " رقم الدخول الخاص بك هو :- " .$code;
        #$res = (new SmsController())->send($message, $request->input("phone"));


        if($request->hasFile("image")){

            $request->image->store('providers-logo', 'public');
            $img_id = DB::table("provider_registers")
                ->insertGetId([
                    "name" => $request->image->hashName()
                ]);

            $data['images'] = $img_id;
        }

        $data = ProviderRegister::create ([
                'name'                      => $request->name,
                'email'                     => $request->email,
                'phone'                     => $request->mobile,
               /* 'province_id'             => $request->province,
                'city_id'                   => $request->city,*/
                'address'                   => $request->address,
                'password'                  => $request->password,
                "ar_details"       => $request->ar_details,
                "en_details"       => $request->en_details,
                'activate_phone_hash'       => $hash,
                'token'                     => $token
        ]);

       /* $id = DB::table("provider_registers")
            ->insertGetId($data);*/

            DB::table('role_user_lara') -> insert([

                'role_id'     => 2,
                'user_id'    => $data->id,
                'user_type'  => 'provider',

            ]);

        Auth::guard('providers')->login(ProviderRegister::find($data->id));

            return response()->json([
                "status" => true,
                "errNum" => 0,
                "msg"    => $msg[12],
                "token"  => $token,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProviderRegister  $providerRegister
     * @return \Illuminate\Http\Response
     */
    public function show(ProviderRegister $providerRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProviderRegister  $providerRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(ProviderRegister $providerRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProviderRegister  $providerRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProviderRegister $providerRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProviderRegister  $providerRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProviderRegister $providerRegister)
    {
        //
    }
}
