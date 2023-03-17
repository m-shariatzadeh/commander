<?php

namespace MShariatzadeh\Commander;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class CommanderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        App::bind('commander',function () {
            return new \MShariatzadeh\Commander\Commander();
        });
    }
}
