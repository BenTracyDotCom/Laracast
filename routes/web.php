<?php
use App\Http\Controllers\PagesController;
use App\Repositories\UserRepository;

Route::get('/', function (UserRepository $users){
    
    dd($users);

    $tasks = [
        'Do the dumb things I gotta do',
        'Touch the puppet head',
        'Go to work'
    ];

    return view('welcome')->withFoo('Welcome!')->withTasks( $tasks );
});

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');