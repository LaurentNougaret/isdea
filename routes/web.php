<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

/*Home Page */

Route::get('/', 'HomeController@index')->name('home');

/* Admin Dashboard */
Route::group(['middleware' => 'IsAdmin'], function (){
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Back\AdminController@index');
        Route::resource('users', 'Back\UserController');
        Route::resource('project', 'Back\ProjectController');
        Route::resource('project.form', 'Back\FormController');
    });
});

/* Users routes */

Route::get('/account', 'Front\UserController@account');
Route::resource('project.form', 'Front\FormController', ['except' => [
    'destroy', 'create', 'store']]);
