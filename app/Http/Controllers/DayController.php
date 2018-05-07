<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Day;

class DayController extends Controller
{
    /*
     *  READ: A listing of days in which aerobic activity was performed
     */
    public function index()
    {
        $days = Day::orderBy('date', 'desc')->get();

        return view('days.index')->with([
            'days' => $days,
        ]);
    }

    /*
     * CREATE: Display the form to add a new day of activities
     */
    public function add(Request $request)
    {
        return view('days.add')->with([
            'day' => new Day(),
        ]);
    }

    /*
     * CREATE: Process the add day form
     */
    public function store(Request $request)
    {
        // A better error message for date format failure
        $messages = [
            'date.date_format' => 'The date does not match the format YYYY-MM-DD',
        ];

        $this->validate($request, [
            'date' => 'required|date_format:Y-m-d',
            'moderate_activity' => 'required',
            'vigorous_activity' => 'required',
        ], $messages);
        // Save the day of activities to the database
        $day = new Day();
        $day->date = $request->date;
        $day->moderate_activity = $request->moderate_activity;
        $day->vigorous_activity = $request->vigorous_activity;
        $day->save();

        // Redirect to form page and display confirmation message
        return redirect('/days/add')->with([
            'alert' => 'You added activities for ' . $day->date
        ]);
    }

    /*
     * UPDATE: Show the form to update/view a day's activities
     * GET /days/{id}/update
     */
    public function update($id)
    {
        // Find the day being updated
        $day = Day::find($id);

        return view('days.update')->with([
            'day' => $day
        ]);
    }

    /*
     * UPDATE: Process the update form
     * PUT /days/{id}
     */
    public function process(Request $request, $id)
    {
        // A better error message for date format failure
        $messages = [
            'date.date_format' => 'The date does not match the format YYYY-MM-DD',
        ];

        $this->validate($request, [
            'date' => 'required|date_format:Y-m-d',
            'moderate_activity' => 'required',
            'vigorous_activity' => 'required',
        ], $messages);

        // Find the day of activity being update
        $day = Day::find($id);

        // Save the day of activities to the database
        $day->date = $request->date;
        $day->moderate_activity = $request->moderate_activity;
        $day->vigorous_activity = $request->vigorous_activity;
        $day->save();

        // Redirect to update page and display confirmation message
        return redirect('/days/' . $id . '/update')->with([
            'alert' => 'Your update was successful',
        ]);
    }

    /*
    * DELETE: Delete confirmation
    * GET /days/{id}/delete
    */
    public function delete($id)
    {
        $day = Day::find($id);

        return view('days.delete')->with([
            'day' => $day,
        ]);
    }
    /*
    * DELETE: Delete specific day of activity
    * DELETE /days/{id}/delete
    */
    public function destroy($id)
    {
        $day = Day::find($id);
        $day->delete();

        return redirect('/days/index')->with([
            'alert' => $day->date . ' was deleted',
        ]);
    }

}
