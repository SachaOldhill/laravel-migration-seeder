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
//

Route::get('/', 'TestController@home')
-> name('home');

Route::get('/movie/{id}', 'TestController@movie')
-> name('movie');


// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('home', 'TestController@home')
//     -> name('home');
