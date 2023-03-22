@extends('layouts.base-vue')
@section('content')
    <form method="post" action="{{ route('generate-ideas.create') }}">
        @csrf
        @foreach($vegetables as $vegetable)
            <div>
                <input type="checkbox" name="vegetables[]" value="{{ $vegetable->name }}">
                <label>{{ $vegetable->name }}</label>
            </div>
        @endforeach
        <button type="submit">Generate Meal Ideas</button>
    </form>

@endsection
