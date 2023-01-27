@extends('layouts.base-vue')
@section('content')

    <div class="chat-create-container">
        <h2>Start a new conversation</h2>
        <form action="{{ route('customer-server.store') }}" method="post">
            @csrf
            <label for="admin">Select an admin:</label>
            <select name="admin_id" id="admin">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                @endforeach
            </select>
            <button type="submit">Start conversation</button>
        </form>
    </div>

@endsection
