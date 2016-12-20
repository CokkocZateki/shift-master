<?php

use Illuminate\Http\Request;
use App\Controllers\AuthController;

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
    
Route::group(['middleware' => 'api'], function () {

	
	Route::post('/account/signup',[ 'uses' =>'AuthController@signup' ]);


	Route::post('/account/signin',[ 'uses' =>'AuthController@signin' ]);


   
});



Route::group(['prefix'=>'/employee','middleware' => 'jwt.auth'], function () {

	Route::get('/',[ 'uses' =>'EmployeeController@index' ]);
	Route::get('/{id}',[ 'uses' =>'EmployeeController@show' ]);
	Route::post('/',[ 'uses' =>'EmployeeController@store' ]);
	Route::delete('/{id}',[ 'uses' =>'EmployeeController@destroy' ]);
	Route::put('/{id}',[ 'uses' =>'EmployeeController@update' ]);

});


Route::group(['middleware' => 'api'], function () {

	Route::get('/rosters/',[ 'uses' =>'RosterController@index' ]);
	Route::post('/rosters/',[ 'uses' =>'RosterController@store' ]);
	Route::post('/rosters/test',[ 'uses' =>'RosterController@store' ]);



});






