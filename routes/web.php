<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['middleware' => ['localizationRedirect', 'localeSessionRedirect', 'localize'], 'prefix' => LaravelLocalization::setLocale()], function () {
    Auth::routes();

    /* Users routes */
    Route::group(['middleware' => 'auth'], function () {
        Route::get(LaravelLocalization::transRoute('routes.profile'), 'Front\UserController@profile')->name('profile');
        Route::patch(LaravelLocalization::transRoute('routes.profile') . '/{id}', 'Front\UserController@update');
        Route::resource(LaravelLocalization::transRoute('routes.project').LaravelLocalization::transRoute('routes.form'), 'Front\FormController', ['except' => [
            'destroy', 'create', 'store']]);
        Route::get('/', 'HomeController@index')->name('home');

    });
    /* Admin Dashboard */
    Route::group(['middleware' => 'admin'], function () {
        Route::resource(LaravelLocalization::transRoute('routes.users'), 'Back\UserController');
        Route::delete(LaravelLocalization::transRoute('routes.users'), ['as' => 'users.destroy', 'uses' => 'Back\UserController@destroy']);
        Route::resource(LaravelLocalization::transRoute('routes.projects'), 'Back\ProjectController');
        Route::resource(LaravelLocalization::transRoute('routes.stats'), 'Back\StatsController');
    });
});

Route::post('/logout','HomeController@performLogout');
Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');
