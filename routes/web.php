<?php
use App\Http\Controllers\PagesController;
use App\Repositories\UserRepository;
use App\Services\Twitter;

Route::get('/', function (Twitter $twitter) {

    $tasks = [
        'Do the dumb things I gotta do',
        'Touch the puppet head',
        'Go to work'
    ];

    return view('welcome')->withFoo('Welcome!')->withTasks($tasks);
});

Auth::routes();

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
