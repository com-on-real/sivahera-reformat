<?php

Route::name('language')->get('/{lang}', 'SinglePageController@language');


Route::domain('cafe.sivahera.com')->group(function ()
{
    Route::get('/', 'SinglePageController@coffee')->name('coffee_path');
});

Route::domain('management.sivahera.com')->group(function ()
{
    Route::get('/', 'SinglePageController@management')->name('home_path');
    Route::get('/courtage', 'SinglePageController@courtage')->name('courtage_path');
    Route::get('/health', 'SinglePageController@health')->name('health_path');
});


/**
Route::get('/', function () {
    return redirect('//management.sivahera.local');
});

*:
