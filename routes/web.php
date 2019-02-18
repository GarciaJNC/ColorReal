<?php

Route::resource('/', 'PagesController');
Route::resource('/about', 'AboutsController');
Route::resource('/contact', 'ContactsController');
Route::resource('/portfolio', 'PortfoliosController');
Route::resource('/information', 'InfornationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
