<!DOCTYPE html>
<!-- Jason Glover; Project 4; Spring 2018 -->

<html lang='en'>
<head>
    <meta charset='UTF-8'/>
    <title>Aerobic Activity Tracker</title>
    <link rel='stylesheet' href='/css/p4.css'/>
    @stack('head')
</head>

<body>

@if(session('alert'))
    <div class='flashAlert'>{{ session('alert') }}</div>
@endif

<div id="header">
    <header>
        <img src="/images/running1.svg" alt="Runner" id="runner">
        <h1>Aerobic Activity Tracker</h1>
    </header>
</div>
<br/>
<br/>
<nav>
    <ul>
        <li><a href='/'>Homepage</a></li>
        <li><a href='/days/index'>View Activities History</a></li>
        <li><a href='/days/add'> Add a Day's Activities</a></li>
    </ul>
</nav>

@yield('content')


</body>

</html>