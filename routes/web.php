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

Route::get('/', 'PageController@index')->name('index');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('/questions', 'QuestionController');
Route::get('/questions/create','QuestionController@create');


Route::resource('/answers', 'AnswersController',['except'=>['index','create','show']]);

Route::get('/profile/{id}', 'PageController@profile')->name('profile');

Route::get('/profile/{id}/delete','PageController@deleteProfile')->name('deleteprofile');
