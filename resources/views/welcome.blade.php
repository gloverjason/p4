@extends('layouts.master')

@section('content')
    <div id="mainContent">
        <img id="mainImage" src="images/running_blue.jpg" alt="Motivational Quote" />
        <br/>
        <span id='imageCite'><a href='https://www.freepik.com/free-vector/man-running-with-blue-flowing-wave_1177163.htm'>
        Designed by Freepik</a></span>
        <br/><br/>

        <br/>
        <article>
            <h2>How to Use This Activity Tracker?</h2>
            <ul class='listSize'>
                <li><span class='articleWords'>To add a new day of activity</span>, just click on the
                "Add a Day's Activities" link, fill out the form, and click the add button at the
                bottom of the form.
                </li>
                <li><span class='articleWords'>To view your activities history</span>, just click on the
                "View Activities History" link.
                </li>
                <li><span class='articleWords'>To update or delete an entry</span>, view your history
                then click the "view/update" or "delete" link on the day you want to modify.
                </li>
                <li><span class='articleWords'>To see activities totals since you started tracking</span>,
                click the "See Your Activities Totals" link.  Here, you will see you total activities in
                hours.  <span class='articleWords'>You will also have the option to find out your average
                hours of activity per week.</span> You should compare your results to the recommendation below
                ("How Much Aerobic Activity You Need?") to find out how well you are doing.
                </li>
            </ul>
        </article><br/>
        <article>
            <h2>Why You Should Track Your Aerobic Activity?</h2>
            <p class="parSize">The benefits of engaging in regular cardiovascular activity are substantial.  Below
             is a list of some of the key benefits you can experience if you consistently engage in physical activity</p>
            <ul class='listSize'>
                <li><span class='keyBenefits'>Reduce your cardiovascular disease risks:</span> This is a significant
                benefit when one considers the fact that heart disease and stroke are the two leading causes of
                death in the United States.
                </li>
                <li><span class='keyBenefits'>Reduce diabetes, high blood pressure, and high fat risks:</span>
                Each of these conditions can significantly impair your life; however, regular exercise
                can reduce your risks of developing these health problems.
                </li>
                <li><span class='keyBenefits'>Lower your risks of some cancers:</span> Studies have shown that
                consistent physical activity reduces your risks of breast cancer, colon cancer, lung cancer,
                and endometrial cancer.
                </li>
                <li><span class='keyBenefits'>Strengthen bones and muscle:</span> Weight bearing activities such as
                running and basketball strengthen bones and muscle.  In addition, it reduces one's risks of
                fractures.
                </li>
                <li><span class='keyBenefits'>Improves mental health:</span> Aerobic activity lowers your risk of
                depression, improves sleep, and helps maintain optimum cognitive abilities.
                </li>
                <li><span class='keyBenefits'>Controls body weight:</span> Physical activity burns calories.  The
                more physical activity you engage in, the more calories you will burn.
                </li>
            </ul>
            <a href='https://www.cdc.gov/physicalactivity/basics/pa-health/index.htm'>Source: Center for Disease
            Control and Prevention - Physical Activity and Health</a>
        </article><br/>
        <article>
            <h2>How Much Aerobic Activity You Need?</h2>
            <p class="parSize"><span class='articleWords'>Adults</span> need at least</p>
            <ul class='listSize'>
                <li>2 hours and 30 minutes of moderate intensity aerobic activity per a week</li>
                <li>OR 1 hour and 15 minutes of vigorous intensity aerobic activity per a week</li>
                <li>OR an equivalent mix of moderate and vigorous intensity aerobic activity</li>
                <li>This is the minimum.  Going beyond these minimum guidelines will provide additional health
                benefits.  In fact, it's safe for most to engage in over twice as much as the minimum recommendations.
                </li>
            </ul>
            <a href='https://www.cdc.gov/physicalactivity/basics/adults/index.htm'>Source: Center for Disease
            Control and Prevention - How much physical activity do adults need</a>
            <br/><br/>
            <p class="parSize"><span class='articleWords'> Youths (age 6 - 17)</span> should engage in</p>
            <ul class='listSize'>
                <li>a combined total of 7+ hours of moderate and/or vigorous intensity aerobic activity per a week.</li>
            </ul>
            <a href='https://www.cdc.gov/healthyschools/physicalactivity/guidelines.htm'>Source: Center for Disease
            Control and Prevention - Youth Physical Activity Guidelines Toolkit</a>
        </article><br/>
        <article>
            <h2>Moderate intensity versus vigorous intensity physical activity</h2>
            <p class="parSize"><span class='articleWords'>Moderate intensity</span> aerobic activity should
            feel somewhat difficult.  Your breath rate should increase, you should begin to sweat after about ten minutes,
            and you should be unable to sing.  Some examples of moderate intensity activity include
            brisk walking, slow cycling, and water aerobics.
            </p>
            <p class="parSize"><span class='articleWords'>Vigorous intensity</span> aerobic activity will
            feel challenging.  Your breathing will be deep and rapid, you should begin to sweat after just a few minutes,
            and you should only be able to say a few words without pausing for breath.  Some examples of vigorous
            intensity activity include running, fast cycling, and swimming laps.
            </p>
            <a href='https://www.cdc.gov/physicalactivity/basics/adults/index.htm'>Source: Center for Disease
            Control and Prevention - How much physical activity do adults need</a>
            <br/>
            <a href='https://www.mayoclinic.org/healthy-lifestyle/fitness/in-depth/exercise-intensity/art-20046887'>
            Source: Mayo Clinic - Exercise intensity: How to measure it</a>
        </article><br/>
    </div>
    <br/>
    <br/>
@endsection