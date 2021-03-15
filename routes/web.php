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

// Authentication
Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@login')->name('login');
    Route::post('/login','LoginController@processLogin')->name('login');
    Route::get('/register-question','LoginController@registerQuestion');
    Route::get('/register/student','LoginController@registerStudent');
    Route::get('/register/employer','LoginController@registerEmployer');
    Route::get('/logout','LoginController@logout')->name('logout');
    Route::post('/register/student', 'LoginController@processStudent');
    Route::post('/register/employer', 'LoginController@processEmployer');
});
    
// Authenticated Routes
Route::group(['middleware' => 'auth'], function () {
    // Internships
    Route::get('/internships', 'InternshipController@index')->name('internships');
    Route::get('/internships/create', 'InternshipController@create');
    Route::get('/internships/show/{id}', 'InternshipController@show');
    Route::get('/internships/edit/{id}', 'InternshipController@edit');
    Route::get('/internships/delete/{id}', 'InternshipController@destroy');
    Route::post('/internships/store', 'InternshipController@store');
    Route::post('/internships/update/{id}', 'InternshipController@update');

    // Applications
    Route::get('/applications', 'ApplicationController@index')->name('applications');
    Route::get('/applications/create/{id}', 'ApplicationController@create');
    Route::get('/applications/edit/{id}', 'ApplicationController@edit');
    Route::get('/applications/show/{id}', 'ApplicationController@show');
    Route::get('/applications/delete/{id}', 'ApplicationController@destroy');
    Route::post('/applications/store/{id}', 'ApplicationController@store');
    Route::post('/applications/update/{id}', 'ApplicationController@update');

    // Users
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/users/edit/{id}', 'UserController@edit');
    Route::get('/users/show/{id}', 'UserController@show');
    Route::get('/users/delete/{id}', 'UserController@destroy');
    Route::post('/users/store', 'UserController@store');
    Route::post('/users/update/{id}', 'UserController@update');


});