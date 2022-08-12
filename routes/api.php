<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/ad/{id}','App\HTTP\Controllers\AdController@show');
Route::get('/ad','App\HTTP\Controllers\AdController@index');



//CRUD For Tags
Route::get('/tag','App\HTTP\Controllers\TagController@index');
Route::get('/tag/{id}','App\HTTP\Controllers\TagController@show');
Route::post('/tag','App\HTTP\Controllers\TagController@store');
Route::put('/tag/{id}','App\HTTP\Controllers\TagController@update');
Route::delete('/tag/{id}','App\HTTP\Controllers\TagController@destroy');


//Crud For Categories
Route::get('/category','App\HTTP\Controllers\CategoryController@index');
Route::get('/category/{id}','App\HTTP\Controllers\CategoryController@show');
Route::post('/category','App\HTTP\Controllers\CategoryController@store');
Route::put('/category/{id}','App\HTTP\Controllers\CategoryController@update');
Route::delete('/category/{id}','App\HTTP\Controllers\CategoryController@destroy');

//Filter by (tag and Category)
Route::get('/filter/tag/{id}','App\HTTP\Controllers\FilterController@filter_tag');
Route::get('/filter/category/{id}','App\HTTP\Controllers\FilterController@filter_category');
Route::get('/filter/user_ads/{id}','App\HTTP\Controllers\FilterController@user_ads');


