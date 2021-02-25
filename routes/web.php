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

//make it go to homecontroller here
//Route::get('/home/{user}', 'HomeController@index')->name('home.show');
//routes after logging in:
Route::get('/home/{user}', 'HomeController@index')->name('home.show')->middleware('normaluser');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/facilitator/{user}', 'FHomeController@index')->name('facilitator.show')->middleware('facilitator');
//after clicking create session:
Route::get('/s/create','SessionsController@create');
Route::post('/s','SessionsController@store');
//get history for fac
Route::get('/history', 'FHomeController@history');
//join session
Route::post('/session/join', 'HomeController@join')->name('session.join');
//view session
Route::get('/session/{sid}', 'SessionsController@view')->name('session.view');

//create card for user
Route::post('/card/create/{sid}', 'CardsController@create');

//view card
Route::get('/card/rate/{cid}', 'CardsController@rate');
//wait after rating
Route::post('/card/wait', 'CardsController@wait');
//history for user + result of sessions
Route::get('/user/history', 'HomeController@history');
//session result view
Route::get('/session/result/{sid}', 'SessionsController@viewResult');

//admin goes to approve menu
Route::get('/admin/approve','AdminController@approve')->name('admin/approve.show');
