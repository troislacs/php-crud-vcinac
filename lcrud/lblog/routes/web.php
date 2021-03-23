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



Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user/{id}', function ($id) {
    return "Your id is: ".$id;
});

Route::get('/user/{id}/{name}', function ($id,$name) {
    return "Welcome:  ".$name."<br>Your id is: ".$id;
});

Route::get('/test', 'App\Http\Controllers\TestController@index');




# follow Reza - Studnet
#Route::get('/', 'App\Http\Controllers\StudentController@index')->name('home');


Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\StudentController@store')->name('store');

# Customize: - Vacmodel
Route::get('/', 'App\Http\Controllers\VacController@index')->name('home');
Route::get('/homevac', 'App\Http\Controllers\VacController@index')->name('homevac');
Route::get('/createvac', 'App\Http\Controllers\VacController@create')->name('createvac');
Route::post('/storevac', 'App\Http\Controllers\VacController@store')->name('storevac');

Route::get('/editvac/{id}','App\Http\Controllers\VacController@edit')->name('editvac');
Route::post('/updatevac/{id}','App\Http\Controllers\VacController@update')->name('updatevac');
Route::delete('/deletevac/{id}','App\Http\Controllers\VacController@delete')->name('deletevac');




