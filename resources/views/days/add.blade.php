@extends('layouts.master')

@section('content')

    <form method='POST' action='/days'>
        {{ csrf_field() }}

        <div class='form'>
            <h2>Add One Day of Activity</h2>
            @include('days.dayFormInputs')
            <input type='submit' value='Add One Day of Activity'>
            @include('modules.error-form')
        </div>

    </form>

@endsection