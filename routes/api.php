<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/////////
Route::middleware('jwtAuth')->group(function() {
    Route::get('logout','AuthController@logout');
    Route::get('me','AuthController@me');
    Route::resource('categories','CategoryController');
    Route::resource('courses','CoursesController');
   
});



  Route::post('register', 'AuthController@register');
Route::post('login','AuthController@login');
Route::resource('posts','postController');



//Route::middleware('jwt.auth')->post('login', 'API/AuthController@login');
