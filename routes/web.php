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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions','QuestionsController');

Route::resource('questions.answer', 'AnswersController')->except(['create', 'show', 'index']);
// Route::post('/answers/{answer}/accept', 'AcceptAnswerController')->name('answer-accept');
Route::post('/answers/{answer}/accept', 'AcceptAnswerController')->name('answers.accept');

Route::POST('/questions/{question}/favorites','FavoritesController@store')->name('questions.favorite');

Route::DELETE('/questions/{question}/favorites','FavoritesController@destroy')->name('questions.unfavorite');

Route::POST('/questions/{question}/vote','VoteQuestionsController');

