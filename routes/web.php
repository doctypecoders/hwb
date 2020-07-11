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
// return the file hwa indexing
Route::get('/', function () {
    return view('hwa');
});
Route::get('/home', function () {
    return view('hwa');
});
// return login page to blog
Route::get('/connect', function () {
    return view('login');
});
Route::get('/blog', function () {
    return view('blog')->with([
    	'user1'=> "Kalel",
    	'user2'=>"Spider",
    	'user3'=>"Scorpy"
    ]);
});