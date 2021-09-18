<?php

namespace VisStudio;

class VisStudio
{
    /**
     * Configuration Vis Studio
     *
     * @var array
     */
    private array $config;

    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        # Get the configuration value
        $default = config('vis-studio');
        # Merge default configuration and life configs
        $this->config = array_merge($config, $default);
    }


}