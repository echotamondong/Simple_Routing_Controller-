<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index() 
    {
        $skills = [
            'Graphic Designing',
            'Editing',
            'Photography',
            'HTML', 'CSS', 'Python', 'PHP', 'JavaScript',
            'Communication',
            'Analytical Thinking',
            'Adaptability'
        ];

        return view('Skills', ['skills' => $skills]);
    }
}
