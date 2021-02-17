<?php

namespace Cgnetwork\Ease;

use Illuminate\Support\ServiceProvider;

class EaseServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ease');
    }
}
