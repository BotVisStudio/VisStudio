<?php

namespace VisStudio\Commands;

use Illuminate\Console\Command;

class Studio extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studio';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'VisStudio Helper';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "VisStudio Bot Framework Laravel\n";
        echo "\nAvailable commands:";
        echo "\nstudio:install {driver} - Install Driver for Social Web";
        return 0;
    }
}
