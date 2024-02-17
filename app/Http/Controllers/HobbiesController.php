<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index() 
    {
        $hobbies = [
            'Watching movies/series',
            'Editing',
            'Eating',
            'Traveling'
        ];

        return view('Hobbies', ['hobbies' => $hobbies]);
    }
}
