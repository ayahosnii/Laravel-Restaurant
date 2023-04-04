@extends('layouts.base-vue')
@section('content')
<!--<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{asset('assets/img/about-image.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">Home</a></li>
                            <li class="about-p"><span>Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- breadcrumb end -->
<!-- login start -->
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
                         aria-describedby="user-tab"
                    >
                <div class="register-area">
                    <div class="register-box">
                        <h1 style="font-family: 'Kdam Thmor Pro', sans-serif;">Create User Account</h1>
                        <p style="font-family: 'Kdam Thmor Pro', sans-serif;">Here is user register form</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <label for="name" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.05rem; margin-top: 1rem;  font-size: 20px">Name</label>
                            <input class="form__input"  type="text" name="name" :value="old('name')" autofocus autocomplete="name" placeholder="Name" />
                            @error('name')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; margin-top: 1rem; font-size: 20px">Email</label>
                            <input class="form__input" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" />
                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="mobile" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Mobile</label>
                            <input class="form__input" id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" placeholder="Mobile" />
                            @error('mobile')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password</label>
                            <input class="form__input"  id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password_confirmation" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password Confirmation</label>
                            <input class="form__input" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" placeholder="Password Confirmation">
                            <button type="submit" class="btn-style1">Create</button>
                        </form>
                        <a href="{{ url('auth/facebook') }}" class="btn btn-primary">
                            Login with Facebook
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade"
                 id="restaurant"
                 role="tabpanel"
                 aria-labelledby="restaurant-tab">

                <div class="register-area">
                    <div class="register-box">
                        <h1 style="font-family: 'Kdam Thmor Pro', sans-serif;">Create Provider Account</h1>
                        <p style="font-family: 'Kdam Thmor Pro', sans-serif;">Here is the provider register form</p>
                        <form id="providers-register-form" method="POST" action="{{ url('/providers/register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.7rem; font-size: 20px">{{trans('site.restaurant_logo')}}</label>
                                <div class="custom-file h-auto">
                                    <input type="file" name="rest_img" class="custom-file-input" id="restaurant-logo" hidden>
                                    <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                        <img class="provider-uploaded-logo d-none" src="" />
                                        <span id="provider-logo-content" class="d-inline-block border border-gray rounded-circle p-4">

                                                <i class="fa fa-plus fa-fw fa-lg text-gray" aria-hidden="true"></i>

                                            </span>

                                        <span class="font-body-md mr-2 text-gray">
                                        {{trans('site.add_restaurant_logo')}}
                                            </span>
                                        <p>..</p>

                                        <p id="provider-logo-error" class="alert alert-danger d-none top-margin logo-error">{{trans('site.add_restaurant_logo')}}</p>

                                    </label>
                                </div>
                            </div><!-- .form-group logo -->

                            <label for="name" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Name</label>
                            <input class="form__input"  type="text" name="name" :value="old('name')" autofocus autocomplete="name" placeholder="Name" />
                            @error('name')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="name" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">User Name</label>
                            <input class="form__input"  type="text" name="user_name" :value="old('name')" autofocus autocomplete="name" placeholder="User Name" />
                            @error('user_name')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Email</label>
                            <input class="form__input" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" />
                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="mobile" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Mobile</label>
                            <input class="form__input" id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" placeholder="Mobile" />
                            @error('mobile')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

{{--
                            <div class="form-group">
                            <label for="province" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 3rem; font-size: 20px">
                                <span class="label-desc">{{trans('site.choose_city')}}</span>
                            </label>
                            <select class="city-ajax-request custom-select text-gray font-body-md" name="province" id="province">
                                <option value="">{{trans('site.luxor')}}</option>
                                <option value="">{{trans('site.aswan')}}</option>
                            </select>
                            @error('province')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="city" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 3rem; font-size: 20px">
                                    <span class="label-desc">{{trans('site.choose_city')}}</span>
                                </label>
                                <select class="city-ajax-request custom-select text-gray font-body-md" name="city" id="city">
                                    <option value="">Edfu</option>
                                    <option value="">Kom Ombo</option>
                                </select>
                                @error('city')
                                <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
--}}

                            <div class="form-group">
                            <label for="address" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Address</label>
                            <input class="form__input"  id="address" class="block mt-1 w-full" type="text" name="address" autocomplete="address" placeholder="Address">
                            @error('address')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password</label>
                                <input class="form__input"  id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>


                            <label for="password_confirmation" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">Password Confirmation</label>
                            <input class="form__input" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" placeholder="Password Confirmation">

                            <div class="form-group">
                                <label for="ar_details" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">{{trans('site.abbrev_services_ar')}}</label>
                                <textarea class="form__input form-control font-body-md"
                                          id="provider-ar-details"
                                          name="ar_details"
                                          rows="6"></textarea>
                                <span id="provider-ar-details_error" style="color:red" class="help-block"></span>
                            </div><!-- .form-group ar details -->

                            <div class="form-group">
                                <label for="en_details" style="font-family: 'Kdam Thmor Pro', sans-serif; margin-bottom: 0.1rem; font-size: 20px">{{trans('site.abbrev_services_en')}}</label>
                                <textarea class="form__input form-control font-body-md"
                                          id="provider-en-details"
                                          name="en_details"
                                          rows="6"></textarea>

                                <span id="provider-en-details_error" style="color:red" class="help-block"></span>
                            </div><!-- .form-group en details -->
                            <button type="submit" class="btn-style1">Create</button>
                        </form>
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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}

