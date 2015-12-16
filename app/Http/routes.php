<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//region Test routes

use App\Models\Education\EducationServiceProvider;

Route::get('/', function () {
    return view('welcome');
});

Route::post('api/foo/bar', function () {
    return 'post :: Hello World';
});

Route::put('api/foo/bar', function () {
    //
    return 'put :: Hello World';
});

Route::delete('api/foo/bar', function () {
    //
    return 'delete :: Hello World';
});

Route::get('api/db_check', function () {
    $results = EducationServiceProvider::get();
    // var_dump($results);
    return "DB Check :: TODO : " . $results[0]['edtype'];
});
//endregion

//region API Routes

Route::get('api/get_categories', 'CategoryController@index');

Route::get('api/get_sub_categories/{cat_id}', 'CategoryController@show');

//endregion