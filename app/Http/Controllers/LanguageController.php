<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LanguageController extends Controller
{
    public function switchLang($localeCode)
    {
//        if (in_array($localeCode, LaravelLocalization::getSupportedLocales())) {
//            LaravelLocalization::setLocale($localeCode);
//        }
        if (array_key_exists($localeCode, LaravelLocalization::getSupportedLocales())) {
            Session::put('applocale', $localeCode);
        }
//        if (array_key_exists($localeCode, Config::get('languages'))) {
//            Session::put('applocale', $localeCode);
//        }
//        return Redirect::back();

        return Redirect::back();

    }
}
