<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear log files';

    /**
     * Execute the console command.
     */
    public function handle() : void
    {
        exec('truncate -s 0 ' . storage_path('logs/laravel.log'));
        $this->comment('Logs have been cleared!');
    }
}
