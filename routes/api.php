<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
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

Route::get('/user', function () {
    return new UserResource(User::find(3));
});


Route::post('/registration', 'UserController@user_registration');
Route::get('/login', 'UserController@user_login');
Route::get('/insert', 'ProductController@insert_product');


Route::get('/alluser', function () {
    return UserResource::collection(User::all());
});