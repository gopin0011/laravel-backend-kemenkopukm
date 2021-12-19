<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function coursesFunction()
    {
        $courses['data'][] = ['id' => 1, 'title' => 'title', 'length' => 'length', 'category' => 'category', 'authorId' => 1, 'watchHref' => 'course/1'];
        return response()->json($courses);
    }
    
    public function authorsFunction()
    {
        $authors[] = ['id' => 1];
        return response()->json($authors);
    }

    public function show($id)
    {
        $course = ['id' => 1, 'title' => 'title', 'length' => 'length', 'category' => 'category', 'authorId' => 1, 'watchHref' => 'course/1'];
        return response()->json($course);
    }

}