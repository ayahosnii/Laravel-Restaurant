<?php

namespace App\View\Composers;

use App\Models\providers\ProviderRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class ProfileComposer
{
    public function compose(View $view)
    {
        $view->with('profiles', $profiles = ProviderRegister::find(Auth::guard('providers')->user()->id));
    }
}
