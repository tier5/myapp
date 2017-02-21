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
Route::get('/pro/{name?}', function ($name = null) {
    return view('layout.life',['name' => $name]);
})->name('life');
Route::get('/pro', function () {
    return view('layout.hobby');
})->name('hobby');
Route::get('/pro', function () {
    return view('layout.choice');
})->name('choice');