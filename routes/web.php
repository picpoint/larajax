<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'IndexController@index')->name('index');
Route::get('/getreq', 'GetReqController@index')->name('getrequests');
Route::get('/getall', 'GetReqController@getAllPosts')->name('allposts');


Route::get('/postreq', 'PostReqController@index')->name('postrequests');
Route::post('/postreq', 'PostReqController@recPost')->name('recpost');
