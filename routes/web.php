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
    return view('welcome0');
})->name('home');

Route::get('welcome', function () {
   return view('welcome');
})->name('welcome');

Route::get('data/collection', function () {
    return view('data_collection');
})->name('data.collection');

Route::get('/train', function () {
    return view('train');
})->name('train');

Route::get('/classify', function () {
    return view('classify');
})->name('classify');

Route::get('/classifyByUser', function () {
    return view('self_classify');
})->name('classifyByUser');
Route::get('/image/{id}/choosespot', function () {
    return view('self_classify_spots');
})->name('image.spot');


Route::post('/start-classifying','App\Http\Controllers\ClassifyingController@start_classify')->name('start_classify');
Route::post('/upload-image','App\Http\Controllers\ClassifyingController@self_training')->name('save_image');


