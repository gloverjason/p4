@extends('layouts.master')

@push('head')
    <script type="text/javascript" src="/js/week_hours.js"></script>
@endpush

@section('content')
    <div class='form'>
        <h3>Since {{ $first }}, you have engaged in a total of
            {{ $sumM or '' }} hours of moderate activity and {{ $sumV or '' }}
            hours of vigorous activity.</h3>

        <h3>Enter your total hours and approximate number of days since
            you started tracking your activity to find out your average
            hours of activity per week.</h3>

        Enter your total hours of moderate activity<br/>
        <input type="number" id="idMod" step='0.1' required/><br/><br/>

        Enter your total hours of vigorous activity<br/>
        <input type="number" id="idVig" step='0.1' required/><br/><br/>

        Approximate total days since you started tracking<br/>
        <input type="number" id="idDays" required/><br/><br/>

        <button id="weekButton">Calculate My Average Hours Per Week</button>
        <br/><br/>
        <h3><span id="yourResults"></span></h3>
        <h3><span id="additionalInfo"></span></h3>
    </div>
@endsection