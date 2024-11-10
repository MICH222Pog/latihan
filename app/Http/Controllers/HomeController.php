<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function popular(){
        $courses = Course::all();
        return view('popular', ['courseData' => $courses]);
    }

    public function writer(){
        $writers = User::all();
        return view('writer', ['Data' => $writers]);
    }
}
