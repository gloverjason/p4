<label for='date'>Date (YYYY-MM-DD)</label>&nbsp;
<input type='text' name='date' value='{{ old('date', $day->date) }}'>
<br/><br/>


<label for='date'>Amount of Moderate Activity (in minutes)</label>&nbsp;
<input type='number' name='moderate_activity' value='{{ old('moderate_activity', $day->moderate_activity) }}'>
<br/><br/>


<label for='date'>Amount of Vigorous Activity (in minutes)</label>&nbsp;
<input type='number' name='vigorous_activity' value='{{ old('vigorous_activity', $day->vigorous_activity) }}'>
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

