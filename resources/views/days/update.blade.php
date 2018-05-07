@extends('layouts.master')

@section('content')

    <form method='POST' action='/days/{{ $day->id }}'>
        {{ method_field('put') }}
        {{ csrf_field() }}

        <div class='form'>
            <h2>Update or View Activity</h2>
            @include('days.dayFormInputs')
            <input type='submit' value='Update Activity'>
            @include('modules.error-form')
        </div>

    </form>

@endsection