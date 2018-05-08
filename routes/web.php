<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage; introduction, use instructions
Route::get('/', 'PageController@welcome');

// READ: A list of all days and activity logs
Route::get('/days/index', 'DayController@index');


// CREATE: Display the form to add a new day of activities
Route::get('/days/add', 'DayController@add');
// CREATE: Process the add day form
Route::post('/days', 'DayController@store');


// UPDATE: Display the form to update or view a day of activities
Route::get('/days/{id}/update', 'DayController@update');
// UPDATE: Process the update form
Route::put('/days/{id}', 'DayController@process');


// DELETE: Delete confirmation page
Route::get('/days/{id}/delete', 'DayController@delete');
// DELETE: Process deletion
Route::delete('/days/{id}', 'DayController@destroy');


// READ: View total activity since inception
Route::get('/days/total', 'DayController@total');




