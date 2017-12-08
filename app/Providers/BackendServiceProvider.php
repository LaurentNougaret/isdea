<?php
/**
 * Created by PhpStorm.
 * User: diesel
 * Date: 07/12/17
 * Time: 16:44
 */

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repositories\PDFRepositoryInterface', 'App\Repositories\PDFRepository');
    }
}