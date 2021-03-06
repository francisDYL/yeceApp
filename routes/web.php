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

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/apply', 'ApplicantController@index');
Route::post('/apply', 'ApplicantController@store');

Route::post('/mailus', 'MailController@mailus');