<?php

namespace App\Console\Commands;

use App\Jobs\LongJob;
use Illuminate\Console\Command;

class Run extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($i = 0; $i < 3; $i++){
            LongJob::dispatch();
        }

        return 0;
    }
}
