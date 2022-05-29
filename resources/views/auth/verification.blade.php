@extends('auth.layouts.base')
@section('content')
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-area">
                    <div class="login-box">
                        <h1>Please Enter the code we sent to mobile</h1>
                        <form method="POST" action="{{route('verify-user')}}">
                            @csrf
                            <label>Verification Code</label>
                            <input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')"  autofocus placeholder="Code">
                            @error('code')
                            <span class="Invalide-feedback text-danger">
                                <strong>{{ $message  }}</strong>
                            </span>
                            @enderror
                            <button type="submit" class="btn-style1">Confirm</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
