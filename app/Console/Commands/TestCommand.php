<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:test {--value=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test command to broadcast an event';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $value = $this->option('value') ?? 'No Data';
        broadcast(new TestEvent('Data: ' . $value));
        $this->info('Event broadcasted successfully');
    }
}
