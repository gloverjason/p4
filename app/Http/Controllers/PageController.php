<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
     *  Homepage; Why and how much cardio; Usage instructions
     */
    public function welcome()
    {
        return view('welcome');
    }
}
