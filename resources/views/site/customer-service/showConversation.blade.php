@extends('site.customer-service.index')
@section('chat')
    <div id="app">
        <customer-service :user_id="{{ \Illuminate\Support\Facades\Auth::user()->id }}"></customer-service>
    </div>
@endsection
