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

Route::get('/', function () {
    return view('welcome');
});



Route::POST('/controller',[
    'uses' => 'theadminController@SignUp',
    'as' => 'SignUp',
]);
Route::POST('/edunet account',[
    'uses' => 'maincontroller@MSignUp',
    'as' => 'MSignUp',
]);
Route::POST('/edunet Staff',[
    'uses' => 'maincontroller@tSignin',
    'as' => 'tSignin',
]);

Route::GET('/edunet school grade',[
    'uses' => 'maincontroller@macc',
    'as' => 'macc',
]);


Route::GET('/edunet adding school',[
    'uses' => 'schoolcontroller@inde',
    'as' => 'inde',
]);

Route::POST('/edunet school added',[
    'uses' => 'schoolcontroller@school',
    'as' => 'addsch',
]);

Route::POST('/edunet school grade',[
    'uses' => 'gradecontroller@grade',
    'as' => 'grade',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
