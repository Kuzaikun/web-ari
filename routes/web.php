<?php

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

/** Default Home Laravel
*Route::get('/', function () {
*    return view('welcome');
*});
*/

//Home
Route::get('/', function () {
    return view('index');
});

Route::get('/aboutari','AboutAriController@index');

//Route::post('/about','AboutController@multiplyTable'); asd
Route::get('mail/send','MailController@send');
