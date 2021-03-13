<?php

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

            Route::get('/', 'WelcomeController@index')->name('index');
            Route::post('logout', 'RegisterController@logout')->name('logout');
            Route::get('forgetpass', 'RegisterController@forgetpass')->name('forgetpass');
            Route::post('saveemailadmin', 'RegisterController@saveemailadmin')->name('saveemailadmin');
            //category routes
            Route::resource('categories', 'CategoryController')->except(['show']);
            Route::get('active/{id}','CategoryController@active')->name('categories.active');
            Route::get('notactive/{id}','CategoryController@notactive')->name('categories.notactive');

            //product routes
            Route::resource('products', 'ProductController')->except(['show']);
            Route::get('pactive/{id}','ProductController@active')->name('products.pactive');
            Route::get('pnotactive/{id}','ProductController@notactive')->name('products.pnotactive');




              Route::resource('giftsrequest', 'GiftsRequestController');
              Route::any('giftsrequest/{id}', 'GiftsRequestController@approve')->name('giftsrequest.approve');
              Route::any('giftsrequestdestroy/{id}', 'GiftsRequestController@destroy')->name('giftsrequest.destroy');
            /////////////////user routes////
            Route::resource('users', 'UserController')->except(['show']);
        }); //end of dashboard routes
    }
);
