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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::get('/students/create', 'App\Http\Controllers\StudentController@create');
Route::post('/students/store', 'App\Http\Controllers\StudentController@store');
Route::get('/students/edit/{nis}', 'App\Http\Controllers\StudentController@edit');
Route::get('/students/delete/{nis}', 'App\Http\Controllers\StudentController@destroy');
