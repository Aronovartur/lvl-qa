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
Route::resource('questions', \App\Http\Controllers\QuestionsController::class)->except('show');
Route::get('/questions/{slug}',[\App\Http\Controllers\QuestionsController::class,  'show'])->name('questions.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('questions/{question}/answers',[\App\Http\Controllers\AnswersController::class,  'store'])->name('answers.store');
Route::resource('questions.answers',\App\Http\Controllers\AnswersController::class)->except(['index','create','show']);
