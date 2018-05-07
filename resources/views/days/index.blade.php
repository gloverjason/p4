@extends('layouts.master')

@section('content')
    <h2 id='daysList'>Days List</h2>
    @if(count($days) > 0)
        @foreach($days as $day)
            <div class='activitiesHistory'>
                <h3>{{ $day->date }}</h3>
                <h4>Moderate Activity =  {{ $day->moderate_activity }} minutes</h4>
                <h4>Vigorous Activity =  {{ $day->vigorous_activity }} minutes</h4>
                <br/>
                <a href='/days/{{ $day->id }}/update'>View/Update</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href='/days/{{ $day->id }}/delete'>Delete</a>
                <br/><br/>
            </div>
        @endforeach
    @else
        <h3>You have not added any days of activity</h3>
    @endif
@endsection

