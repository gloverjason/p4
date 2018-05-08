<label for='date'>Date (YYYY-MM-DD)</label>&nbsp;
<input type='text' id='date' name='date' value='{{ old('date', $day->date) }}'>
<br/><br/>


<label for='moderate_activity'>Amount of Moderate Activity (in minutes)</label>&nbsp;
<input type='number' id='moderate_activity' name='moderate_activity' value='{{ old('moderate_activity', $day->moderate_activity) }}'>
<br/><br/>


<label for='vigorous_activity'>Amount of Vigorous Activity (in minutes)</label>&nbsp;
<input type='number' id='vigorous_activity' name='vigorous_activity' value='{{ old('vigorous_activity', $day->vigorous_activity) }}'>
<br/><br/><br/>

<label>Which keyword(s) best describe the type of exercise you engaged in?</label><br/><br/>
@foreach($descriptionsForCheckboxes as $descriptionId => $descriptionName)
    <label>
        <input
                {{ (in_array($descriptionId, $descriptions)) ? 'checked' : '' }}
                type='checkbox'
                name='descriptions[]'
                value='{{ $descriptionId }}'>
        {{ $descriptionName }}
    </label>
    <br/>
@endforeach
<br/>

