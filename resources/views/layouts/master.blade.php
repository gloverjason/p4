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
        <li>Add a Day's Activity</li>
    </ul>
</nav>

@yield('content')


</body>

</html>