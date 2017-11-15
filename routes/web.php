<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;

$all_langs = config('app.all_langs');

/**
 * Iterate over each language prefix
 */
foreach( $all_langs as $prefix ){

    if ($prefix == 'fr') {
        $prefix = '';
    }

    /* Users routes */
    Route::group(['middleware' => 'auth', 'prefix' => $prefix], function () use ($prefix){
        // Now we need to make sure the default prefix points to default  lang folder.

        if ($prefix == '') $prefix = 'fr';
        Route::get('/', 'HomeController@index')->name($prefix.'_home');
        Route::get(Lang::get('routes.profile',[], $prefix), 'Front\UserController@profile')->name('profile');
        Route::patch(Lang::get('routes.profile',[], $prefix) . '/{id}', 'Front\UserController@update');
        Route::resource(Lang::get('routes.project',[], $prefix) . Lang::get('routes.form',[], $prefix), 'Front\FormController', ['except' => [
            'destroy', 'create', 'store']]);
    });
    /* Admin Dashboard */
    Route::group(['middleware' => 'admin', 'prefix' => $prefix], function () use ($prefix){
        if ($prefix == '') $prefix = 'fr';
        Route::get('/', 'Back\AdminController@index');
        Route::resource(Lang::get('routes.users',[], $prefix), 'Back\UserController');
        Route::delete(Lang::get('routes.users',[], $prefix), ['as'=>'users.destroy', 'uses'=>'Back\UserController@destroy']);
        Route::resource(Lang::get('routes.projects',[], $prefix), 'Back\ProjectController');
        Route::resource(Lang::get('routes.stats',[], $prefix), 'Back\StatsController');
    });
}


Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Auth::routes();

//
///**
// * Iterate over each language prefix
// */
//foreach( $all_langs as $prefix ){
//
//    if ($prefix == 'pl') $prefix = '';
//
//    /**
//     * Register new route group with current prefix
//     */
//    Route::group(['prefix' => $prefix], function() use ($prefix) {
//
//        // Now we need to make sure the default prefix points to default  lang folder.
//        if ($prefix == '') $prefix = 'pl';
//
//        /**
//         * The following line will register:
//         *
//         * example.com/
//         * example.com/en/
//         */
//        Route::get('/', 'MainController@getHome')->name('home');
//
//        /**
//         * The following line will register:
//         *
//         * example.com/kontakt
//         * example.com/en/contact
//         */
//        Route::get(Lang::get('routes.contact',[], $prefix) , 'MainController@getContact')->name('contact');
//
//        /**
//         * “In another moment down went Alice after it, never once
//         * considering how in the world she was to get out again.”
//         */
//        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () use ($prefix){
//
//            /**
//             * The following line will register:
//             *
//             * example.com/admin/uzivatelia
//             * example.com/en/admin/users
//             */
//            Route::get(Lang::get('routes.admin.users',[], $prefix), 'AdminController@getUsers')
//                ->name('admin-users');
//
//        });
//    });
//}