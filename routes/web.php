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
})->name('home');

Route::get('/train', function () {
    return view('train');
})->name('train');

Route::get('/classify', function () {
    return view('classify');
})->name('classify');



Route::post('/start-classifying','App\Http\Controllers\ClassifyingController@start_classify')->name('start_classify');
