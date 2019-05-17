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
	$user = $request->user();
	$data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            // 'role' => $roles,
            'role' => ['admin'],
            'avatar' => 1234,
            // 'company' =>  $company['name'],
            // 'company_short' =>  $company['short_name'],
            // 'company_id' => $user['company_id'],
            // 'role_cn' => $role_cn,
            // 'role_list' => $role_list,
            // 'curr_role' =>  [$curr_role],
            'permission' =>  ['add','delete'],
        ];
    return $data;
});

// api/posts
Route::get('/posts','PostController@index');
Route::get('/posts/{post}','PostController@show');

// auth
Route::post('/register','Auth\RegisterController@register');
Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout');
Route::post('/token/refresh','Auth\LoginController@refresh');

// recDrive
Route::get('/folder/content/{number}','DriveController@index');
Route::post('/startag','DriveController@toggleStar');
Route::post('/operationFileOrFolder','DriveController@operationFileOrFolder');
Route::post('/rename','DriveController@rename');

Route::get('/tags','DriveController@getTags');
Route::post('/tags','DriveController@postTags');
Route::post('/addtags','DriveController@addTags');
Route::delete('/removeTag','DriveController@removeTag');



Route::get('/trees','DriveController@getTrees');
