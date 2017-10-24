<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale(),
              'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function() {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    /* Admin Dashboard */
//    Route::group(['middleware' => 'IsAdmin'], function (){
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Back\AdminController@index');
        Route::resource('users', 'Back\UserController');
        Route::resource('project', 'Back\ProjectController');
//    });
    });

    /* Users routes */
    Route::get('/profile', 'Front\UserController@profile');
    Route::resource('project.form', 'Front\FormController', ['except' => [
        'destroy', 'create', 'store']]);
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
