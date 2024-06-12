<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Do the dumb things I gotta do',
            'Touch the puppet head',
            'Go to work'
        ];

        return view('welcome')->withTasks($tasks)->withFoo('Welcome!');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
