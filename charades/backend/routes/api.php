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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'v1'], function(){
    Route::get('words', 'wordController@index');
    Route::get('session/{username}', 'SessionController@start');
    Route::get('participators/{username}/{session_key}', 'ParticipatorController@store');
<<<<<<< HEAD
    Route::get('answer/{session_id}', 'AnswerController@store');
=======
    Route::get('answer/{username}/{session_key}', 'AnswerController@store');
>>>>>>> 483a1b28858f9277c5b2468e65794558be4e5bc0
});
