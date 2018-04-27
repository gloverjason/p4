<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /*
     *  Show introductory info, instructions, and blank form
     */
     public function index()
     {
         return view('activity.index');
     }

     public function addActivity()
     {
          // Make sure all required sections are filled out
          // Laravel automatically redirects back to index page if errors are present
          $this->validate($request, [
              'date' => 'required',
              'moderate' or 'vigorous' => 'required',
          ]);


          return view('activity.addActivity');
     }
}
