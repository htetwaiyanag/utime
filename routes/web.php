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

Route::get('/login','MemberPagesController@login')->name('login');

Route::get('/data','MemberPagesController@data')->name('data');

Route::get('/step1','MemberPagesController@step1')->name('step1');




Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


// daily work
Route::resource('dailyWorks', 'DailyWorksController');

// insert data for planner
Route::resource('plans', 'PlansController');

// getting the planner
Route::resource('planner', 'PlannerController');


// ready planner


Route::get('/ready','MemberPagesController@planner')->name('planSuccess');



