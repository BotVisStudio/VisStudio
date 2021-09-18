<?php

namespace VisStudio;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class VisStudioServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/VisStudio/vis-studio.php' => config_path('VisStudio/vis-studio.php')
        ]);

    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/VisStudio/vis-studio.php', 'vis-studio'
        );
    }
}