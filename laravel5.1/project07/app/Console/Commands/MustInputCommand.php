<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MustInputCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'must:input {username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'You must input arguement~~~';

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
     * @return mixed
     */
    public function handle()
    {
        // $username = $this->argument('username');
        // echo $username;
        $username = $this->option('username');
        echo $username;
    }
}
