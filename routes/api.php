<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CoursesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
// header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/courses', [CoursesController::class, 'coursesFunction'])->name('courses');
Route::get('/courses/{id}', 'CoursesController@show');
Route::get('/authors', [CoursesController::class, 'authorsFunction'])->name('authors');


Route::get('/tutorials', 'TutorialController@allTutorial');
Route::get('/tutorials/{id}', 'TutorialController@getTutorial');
Route::put('/tutorials/{id}', 'TutorialController@putTutorial');

// Route::get('articles', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Article::all();
// });