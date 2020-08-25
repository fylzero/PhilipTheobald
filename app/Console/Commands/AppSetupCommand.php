<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AppSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Does all the things one typically does after a pull.  Composer install, NPM install, etc.';

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
        exec('composer install');
        exec('npm install');
        exec('npm audit fix');
        exec('npm run dev');
        $this->call('optimize:clear');
        exec('composer dump-autoload');
    }
}
