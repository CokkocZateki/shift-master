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



/**
 * 
 */




Route::get('/user', function (Request $request) {
	$name =['name'=>'rajesh'];
    return json_encode($name);
})->middleware('api');


Route::group(['prefix'=>'admin','middleware' => ['api']], function () {
    Route::get('users', function ()    {
        return "Test api";
});


});