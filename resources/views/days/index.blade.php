@extends('layouts.master')

@section('content')
    <h2 id='daysList'>Days List</h2>
    @foreach($days as $day)
        <div class='activitiesHistory'>
            <h3>{{ $day->date }}</h3>
            <h4>Moderate Activity =  {{ $day->moderate_activity }}</h4>
            <h4>Vigorous Activity =  {{ $day->vigorous_activity }}</h4>
        </div>
    @endforeach
@endsection

