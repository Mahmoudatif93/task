<?php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

       Route::prefix('fakka')->name('fakka.')->middleware(['webauth'])->group(function () {


           });
                    /////////////////////////home///////////
                   Route::prefix('')->name('fakka.')->group(function () {
                    Route::get('/', 'WelcomeController@index')->name('index');
                    Route::get('home-to-cart/{id}','WelcomeController@getAddToCart')->name('home.addToCart');
                    Route::get('gold_price','WelcomeController@gold_price')->name('home.gold_price');


                    Route::any('search', 'WelcomeController@search');




                });



    });


