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

//  Route::group(['prefix' => 'v1'], function(){
// Route::resource('dokumen', 'SpmiDokumenController',[
// 	'except' => ['create' , 'edit']
// ]);
// Route::resource('dokumen/register', 'SpmiDokumenControllerRegister',[
// 	'only' => ['store' , 'destroy']
// ]);

// Route::post('/user/register', [
// 	'uses' => 'AuthController@store'
// ]);

// Route::post('/user/signin', [
// 	'uses' => 'AuthController@signin'
// ]);

// });

Route::get('users', 'UserController@users');

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::get('users/{id}', 'UserController@profileById')->middleware('auth:api');
Route::post('dokumen/add', 'DokumenController@add')->middleware('auth:api');
Route::get('dokumen/view', 'DokumenController@view');
Route::get('dokumen/dokumen', 'DokumenController@dokumen');
Route::put('dokumen/{dokumen}', 'DokumenController@update')->middleware('auth:api');
