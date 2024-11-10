<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course($id){
        $courses = Course::where('category_id', $id)->get();
        $category = Category::findOrFail($id);
        return view('course', ['courseData' => $courses, 'name' => $category->name]);
    }

    public function view($id){
        $courses = Course::findOrFail($id);
        return view('courseview', ['data' => $courses]);
    }

    public function viewwriter($id){
        $courses = Course::where('writer_id', $id)->get();
        $writer = User::findOrFail($id);
        return view('coursewriter', ['courseData' => $courses, 'name' => $writer->name]);
    }
}
