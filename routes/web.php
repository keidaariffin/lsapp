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

Route::get('about', function()
    {
        return View::make('layouts.about');
    });

Route::get('programme', function()
    {
    return View::make('layouts.programme');
    }); 

Route::get('portal', function()
    {
        return View::make('layouts.portal');
    });

Route::get('contact', function()
    {
        return View::make('layouts.contact');
    });

    

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
