<?php

namespace VisStudio;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use VisStudio\Commands\Drivers;
use VisStudio\Commands\Studio;

class VisStudioServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/VisStudio/vis-studio.php' => config_path('VisStudio/vis-studio.php')
        ]);

        if($this->app->runningInConsole()) {
            $this->commands([
                Drivers::class,
                Studio::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/VisStudio/vis-studio.php', 'vis-studio'
        );
    }
}