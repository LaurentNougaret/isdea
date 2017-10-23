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
    });
});

/* Users routes */

Route::get('/profile', 'Front\UserController@profile');
Route::resource('project.form', 'Front\FormController', ['except' => [
    'destroy', 'create', 'store']]);
