<label for='date'>Date (YYYY-MM-DD)</label>&nbsp;
<input type='text' name='date' value='{{ old('date', $day->date) }}'>
<br/><br/>


<label for='date'>Amount of Moderate Activity (in minutes)</label>&nbsp;
<input type='number' name='moderate_activity' value='{{ old('moderate_activity', $day->moderate_activity) }}'>
<br/><br/>


<label for='date'>Amount of Vigorous Activity (in minutes)</label>&nbsp;
<input type='number' name='vigorous_activity' value='{{ old('vigorous_activity', $day->vigorous_activity) }}'>
<br/><br/>


