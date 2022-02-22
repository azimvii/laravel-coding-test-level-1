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

Route::get('v1/events', 'EventController@getAllEvent');
Route::get('v1/events/active-event', 'EventController@getActiveEvent');
Route::get('v1/events/{id}', 'EventController@getAnEvent');
Route::post('v1/events', 'EventController@createEvent');
Route::put('v1/events/{id}', 'EventController@createUpdateEvent');
Route::patch('v1/events/{id}', 'EventController@updateEvent');
Route::delete('v1/events/{id}', 'EventController@destroyEvent');