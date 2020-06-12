<?php

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

Route::group(['middleware' => 'jwt.auth'], function (Route $api) {
    Route::group(['prefix' => 'auth'], function (Route $api) {
        $api->post('logout', 'AuthController@logout');
        $api->post('refresh', 'AuthController@refresh');
        $api->post('me', 'AuthController@me');
    });
    Route::post('/recipes', 'RecipeController@store');
});

Route::post('auth/login', 'AuthController@login');
Route::get('/random', 'RecipeController@random');
