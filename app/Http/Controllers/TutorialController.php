<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function allTutorial()
    {
        $tutorials[] = ['id' => 1, 'title' => 'title', 'description' => 'description', 'published' => false];
        return response()->json($tutorials);
    }

    public function getTutorial($id)
    {
        $tutorial = ['id' => 1, 'title' => 'title', 'description' => 'description', 'published' => false];
        return response()->json($tutorial);
    }

    public function putTutorial($id)
    {
        // header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
        // header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

        $tutorial = ['id' => 1, 'title' => 'title', 'description' => 'di update description', 'published' => false];
        return response()->json($tutorial);
    }

}