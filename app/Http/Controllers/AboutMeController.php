<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() 
    {
        $data = [
            'name' => 'John Doe',
            'age' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ];
        return view('about_me', $data);
    }
}
