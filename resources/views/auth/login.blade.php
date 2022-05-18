@extends('auth.layouts.base')
@section('content')
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-area">
                    <div class="login-box">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Login</h1>
                        <p>Please login below account detail</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label>Email</label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                            <label>Password</label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                            <button type="submit" class="btn-style1">Sign in</button>
                            @if (Route::has('password.request'))
                            <a href=href="{{ route('password.request') }}" class="re-password">Forgot your password?</a>
                            @endif
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </form>
                    </div>
                    <div class="login-account">
                        <h4>Don't have an account?</h4>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/register.html" class="ceate-a">Create account</a>
                        <div class="login-info">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/terms-conditions.html" class="terms-link"><span>*</span> Terms &amp; conditions.</a>
                            <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="https://spacingtech.com/html/vegist-final/vegist/privacy-policy.html">privacy policy</a></p>
                        </div>
                    </div>
                </div>
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
