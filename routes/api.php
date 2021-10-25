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

// Displaying Jobs API
Route::get('/getjobs', 'ApiController@getJobs');

// Displaying Users API
Route::get('/getusers', 'ApiController@getUsers');

// Displaying Affinity Groups API
Route::get('/getaffinitygroups', 'ApiController@getAffinity');

// Displaying Portfolios API
Route::get('/getportfolios', 'ApiController@getPortfolios');