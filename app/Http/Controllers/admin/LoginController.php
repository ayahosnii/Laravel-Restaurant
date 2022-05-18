<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
 * Psy Shell v0.11.1 *
    public function save()
    {
        $admin = new App\Models\Admin();
        $admin -> name = "Aya Hosny";
        $admin -> email = "aya@gmail.com";
        $admin -> password = bcrypt("12345678");
        $admin -> save();
    }
*/

    public function getLogin()
    {
        return view('admin.auth.login');
    }


    public function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input('password')], $remember_me)) {

            //notify()->success('تم الدخول بنجاح');
            return redirect() -> route('admin.dashboard');
        }

        //notify()->error('خطأ في البيانات برحاء المحاولة مجددا');
        return redirect()->back()->with(['error' => 'هناك خطأ بالبيانات']);
    }

}
