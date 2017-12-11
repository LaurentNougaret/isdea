<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Admin Dashboard */
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function (){
    Route::get('/', 'Back\AdminController@index');
    Route::resource('users', 'Back\UserController');
    Route::resource('projects', 'Back\ProjectController');
    Route::delete('users', ['as'=>'users.destroy', 'uses'=>'Back\UserController@destroy']);
    Route::delete('projects', ['as'=>'projects.destroy', 'uses'=>'Back\ProjectController@destroy']);
    Route::resource('stats', 'Back\StatsController');
});

/* Users routes */
Route::group(['middleware' => 'auth'], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/profile', 'Front\UserController@profile')->name('profile');
    Route::patch('/profile/{id}', 'Front\UserController@update');
    Route::resource('result', 'Front\FormController', ['except' => [
        'destroy', 'create', 'store']]);
    Route::resource('projects', 'Front\ProjectController', ['only' => ['index', 'edit', 'update']]);
//    Route::get('project/{project}/form', function () {
//        return view('front.project.form.section6');
//    });
//    Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'Front\FormController@fileUpload']);
Route::get('fiche/{result}', 'Back\AdminController@generatePDF');
});
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Auth::routes();