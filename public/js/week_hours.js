// Put everything inside an onload function so JavaScript doesn't try to access
// HTML elements before they are loaded.
window.onload = function() {

    //Create event listener
    document.getElementById("weekButton").addEventListener("click", weekCalculator);

    // Hours Per Week Calculator
    function weekCalculator() {

        // Get the values by id
        var jModerate = document.getElementById("idMod").value;
        var jVigorous = document.getElementById("idVig").value;
        var jDays = document.getElementById("idDays").value;

        // Form Validation
        if (jModerate === "" || jVigorous === "" || jDays === "") {
            document.getElementById("yourResults").innerHTML = "Warning: You did NOT fill out one or more parts of this form";
        } else {
            // Find the average hours per weeks for moderate and vigorous physical activity
            var jModWeek = (jModerate / jDays) * 7;
            var jVigWeek = (jVigorous / jDays) * 7;

            // Round to one decimal place
            var jModWeekRound = jModWeek.toFixed(1);
            var jVigWeekRound = jVigWeek.toFixed(1);

            // write results to HTML
            document.getElementById("yourResults").innerHTML = "You average " + jModWeekRound + " hours of moderate activity and " +
                jVigWeekRound + " hours of vigorous activity per week since you started tracking your aerobic activity.";
            // write additional info to HTML
            document.getElementById("additionalInfo").innerHTML = "Compare your results to the recommended guidelines on the homepage."

        }
    }

};