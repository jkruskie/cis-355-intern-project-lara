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
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/login','LoginController@process_login')->name('login');
    Route::get('/register','LoginController@show_signup_form')->name('register');
    Route::post('/register','LoginController@process_signup')->name('register');
    Route::get('/logout','LoginController@logout')->name('logout');
});

// Authenticated Routes
Route::group(['middleware' => 'auth'], function () {
    // Internships
    Route::get('/internships', 'InternshipController@index')->name('internships');
    Route::get('/internships/show/{id}', 'InternshipController@show');
    Route::get('/internships/edit/{id}', 'InternshipController@edit');
    Route::post('/internships/update/{id}', 'InternshipController@update');

    // Applications
    Route::get('/applications', 'ApplicationController@index')->name('applications');
    Route::get('/applications/create/{id}', 'ApplicationController@create');
    Route::get('/applications/edit/{id}', 'ApplicationController@edit');
    Route::get('/applications/show/{id}', 'ApplicationController@show');
    Route::post('/applications/store/{id}', 'ApplicationController@store');
    Route::post('/applications/update/{id}', 'ApplicationController@update');


});