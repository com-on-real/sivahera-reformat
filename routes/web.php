<?php
Route::get('/{lang}', 'SinglePageController@language')->name('language');


Route::domain('cafe.'. env('APP_DOMAINE') )->group(function ()
{
    Route::get('/', 'SinglePageController@coffee')->name('coffee_path');
});

Route::domain('management.'. env('APP_DOMAINE') )->group(function ()
{
    Route::get('/', 'SinglePageController@management')->name('home_path');
});


Route::get('/', function () {
    return view('home');
});
