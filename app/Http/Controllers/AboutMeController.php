<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() 
    {
        $data = [
            'name' => 'Jericho Dizon Tamondong',
            'age' => 23,
            'major' => 'Web Technology.'
        ];
        return view('About_Me', $data);
    }
}
