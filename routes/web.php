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



Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
