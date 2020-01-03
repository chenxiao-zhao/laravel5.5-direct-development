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

Route::get('AesEncrypt', 'AesController@Encrypt');
Route::get('AesDecrypt', 'AesController@Decrypt');
Route::post('v1/register', 'V1\AuthController@register');
Route::post('v1/login', 'V1\AuthController@login');
Route::post('v1/forgot_password', 'V1\AuthController@forgot_password');
Route::post('v1/reset_password', 'V1\AuthController@reset_password');

Route::group(['middleware' => 'jwt.auth'],function(){
    Route::post('v1/logout', 'V1\AuthController@logout');
});