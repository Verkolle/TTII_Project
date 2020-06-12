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


Auth::routes();

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

Route::post('/ach', 'AchievementController@store');
Route::get('/ach/create', 'AchievementController@create');
Route::get('/ach/{achievement}', 'AchievementController@show');
Route::patch('/ach/{achievement}', 'AchievementController@update')->name('achievement.update');

Route::post('/comment', 'CommentController@store');
Route::get('/comment/create', 'CommentController@create');









