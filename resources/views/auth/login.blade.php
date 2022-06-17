@extends('auth.layouts.base')
@section('content')
<!--
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="register-area">
                    <div class="register-box" style="width: 1500px">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
-->

                            <section class="section-tb-padding">
                                <div class="col-lg-6 col-sm-10 col-12 mx-auto font-body-bold mb-5">

                                    <div class="d-flex px-3 rounded-lg shadow-around mt-4 justify-content-between flex-md-column flex-sm-column flex-column bg-white">
                                        <ul class="nav nav-tabs border-0 px-lg-2 pr-0 text-center justify-content-around"
                                            id="new-branch-tabs"
                                            role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link pb-3 h3 mb-0 pt-3 font-body-bold active"
                                                   id="user-tab"
                                                   data-bs-toggle="tab"
                                                   href="#user"
                                                   role="tab"
                                                   aria-controls="user"
                                                   aria-selected="true"
                                                   style="font-family: 'Kdam Thmor Pro', sans-serif;"
                                                >
                                                    {{trans('site.as_user')}}
                                                </a>
                                            </li><!-- .nav-item -->

                                            <li class="nav-item">
                                                <a class="nav-link pb-3 h3 mb-0 pt-3 font-body-bold"
                                                   id="restaurant-tab"
                                                   data-bs-toggle="tab"
                                                   href="#restaurant"
                                                   role="tab"
                                                   aria-controls="restaurant"
                                                   aria-selected="false"
                                                   style="font-family: 'Kdam Thmor Pro', sans-serif;"
                                                >
                                                    {{trans('site.as_provider')}}
                                                </a>
                                            </li><!-- .nav-item -->
                                        </ul><!-- .nav-tabs -->
                                    </div>
                                    <div>

                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="tab-content">

                                                    <div class="tab-pane fade show active"
                                                         id="user"
                                                         role="tabpanel"
                                                         aria-describedby="user-tab">
                                                        <div class="login-area">
                                                            <div class="login-box" style="width: 1500px">
                                                                <h1 style="font-family: 'Kdam Thmor Pro', sans-serif;">Login User Account</h1>
                                                                <p style="font-family: 'Kdam Thmor Pro', sans-serif;">Please login below account detail</p>
                                                                <form method="POST" action="{{ route('login') }}">
                                                                    @csrf
                                                                    <label  style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Email</label>
                                                                    <input id="email" class="form__input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                                                    <label  style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password</label>
                                                                    <input id="password" class="form__input block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                                                    <button type="submit" class="btn-style1">Sign in</button>
                                                                    @if (Route::has('password.request'))
                                                                        <a href=href="{{ route('password.request') }}" class="re-password">Forgot your password?</a>
                                                                    @endif
                                                                </form>
<!--                                                                <div class="login-account">
                                                                    <h4>Don't have an account?</h4>
                                                                    <a href="{{route('register')}}" class="ceate-a">Create account</a>
                                                                </div>-->
                                                            </div>
                                                    </div>
                                                    </div>


                                                    <div class="tab-pane fade"
                                                         id="restaurant"
                                                         role="tabpanel"
                                                         aria-labelledby="restaurant-tab">

                                                                    <div class="tab-content">

                                                                        <div class="tab-pane fade show active"
                                                                             id="user"
                                                                             role="tabpanel"
                                                                             aria-describedby="user-tab">
                                                                            <div class="login-area">
                                                                                <div class="login-box" style="width: 1500px">
                                                                                    <h1 style="font-family: 'Kdam Thmor Pro', sans-serif;">Login Provider Account</h1>
                                                                                    <p style="font-family: 'Kdam Thmor Pro', sans-serif;">Please login below account detail</p>
                                                                                    <form method="POST" action="{{ route('login') }}">
                                                                                        @csrf
                                                                                        <label  style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Email</label>
                                                                                        <input id="email" class="form__input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                                                                        <label  style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password</label>
                                                                                        <input id="password" class="form__input block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                                                                        <button type="submit" class="btn-style1">Sign in</button>
                                                                                        @if (Route::has('password.request'))
                                                                                            <a href=href="{{ route('password.request') }}" class="re-password">Forgot your password?</a>
                                                                                        @endif
                                                                                    </form>
<!--                                                                                    <div class="login-account">
                                                                                        <h4>Don't have an account?</h4>
                                                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/register.html" class="ceate-a">Create account</a>
                                                                                    </div>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    </div>
                                                </div>


                                        <!--                    <div class="register-account">
                        <h4>Already an account holder?</h4>
                        <a href="{{route('login')}}" class="ceate-a">Log in</a>
                        <div class="register-info">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/terms-conditions.html" class="terms-link"><span>*</span> Terms &amp; conditions.</a>
                            <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="https://spacingtech.com/html/vegist-final/vegist/privacy-policy.html">privacy policy</a></p>
                        </div>
                    </div>-->
                                        </div>
                                    </div>
                                </div>






</section>
@endsection



{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
