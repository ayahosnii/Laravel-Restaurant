@extends('layouts.base-vue')
@section('content')

    <div class="container">
        <h2>Chat</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('customer-server.create') }}" class="btn btn-primary">New Conversation</a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">Conversations</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($conversations as $conversation)
                                <li class="list-group-item">
                                    <a href="{{ route('customer-server.index', ['uuid' => $conversation->uuid]) }}">{{ $conversation->admin->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('chat')
            </div>
        </div>
    </div>
@endsection
