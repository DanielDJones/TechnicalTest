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

/*
Route::get('/', function () {
    return view('welcome');
}); 
*/

Route::get('/', "PagesController@index");

Route::get('/about', function() {
    return view("pages/about");
});

Route::get('/report/{year}/{month}', function($year, $month) {
    return "This is the report for year".$year." Month".$month;
});

Route::get('/report/{year}/{month}', "PagesController@report");


Route::resource("members", "MembersController");
Route::resource("membership", "MembershipController");

Route::get("/membership/{id}/create", "MembershipController@create");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
