<?php

namespace Cgnetwork\Ease\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ease:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Ease files';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'ease']);
    }
}
