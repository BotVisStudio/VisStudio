<?php

namespace VisStudio\Commands;

use Illuminate\Console\Command;

class Drivers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studio:install:{driver}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install driver web-social bot';

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
        echo 'Start installing driver: ' . $this->argument('driver');
        return 0;
    }
}
