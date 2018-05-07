@extends('layouts.master')

@section('content')

    <form method='POST' action='/days/{{ $day->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}

        <div class='form'>
            <h2>Do you want to permanently delete your aerobic activity for {{ $day->date }}?</h2>
            <input type='submit' value='Delete Activity'>
            <br/><br/>
            <h4><a href='/days/index/'>Return to Activities History</a></h4>
        </div>

    </form>

@endsection