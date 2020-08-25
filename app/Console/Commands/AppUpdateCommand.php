<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AppUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Does all the things one typically does when updating Composer, NPM, etc.';

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
        exec('composer update');
        exec('npm update');
        exec('npm audit fix');
        exec('git add .');
        exec('git commit -m "Composer and NPM update"');
        $this->info('Laravel Framework Version '.app()->version());
    }
}
