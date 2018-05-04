<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Day;

class DayController extends Controller
{
    /*
     *  A listing of days in which aerobic activity was performed
     */
    public function index()
    {
        $days = Day::orderBy('date')->get();

        return view('days.index')->with([
            'days' => $days,
        ]);
    }

    public function add()
    {
        // Make sure all required sections are filled out
        // Laravel automatically redirects back to index page if errors are present
        $this->validate($request, [
            'date' => 'required',
            'moderate' or 'vigorous' => 'required',
        ]);


        return view('days.add');
    }
}
