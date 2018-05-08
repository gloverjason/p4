@extends('layouts.master')

@section('content')



        <div class='form'>

            <h2>Since {{ $first }}, you have engaged in a total of
            {{ $sumM or '' }} hours of moderate activity and {{ $sumV or '' }}
            hours of vigorous activity.</h2>

        </div>



@endsection