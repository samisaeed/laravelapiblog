<?php

use Illuminate\Http\Request;

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

//list of blog post 
 Route::get('blogs', 'BlogController@index');

 //list of single blog post 
 Route::get('blog/{id}', 'BlogController@show');

 //Create new blog post 
 Route::post('blog', 'BlogController@store');

 //update blog post 
 Route::put('blog', 'BlogController@store');

 //Delete blog post 
 Route::delete('blog/{id}', 'BlogController@destroy');


// jwt authentication

 Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});