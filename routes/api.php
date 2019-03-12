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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group([

//     'middleware' => 'api',
//     'namespace' => 'App\Http\Controllers\Api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });

Route::post('login', 'Api\AuthController@login');

Route::middleware('jwt.auth')->get('user', function () {
    return auth('api')->user();
});

Route::middleware('jwt.auth')->get('product', 'ProductController@index');
Route::middleware('jwt.auth')->get('order', 'OrderController@index');
Route::middleware('jwt.auth')->get('users', 'Api\AuthController@index');