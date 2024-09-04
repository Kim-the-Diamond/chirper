<?php

namespace KimSpeer\Chirper\Commands;

use Illuminate\Console\Command;

class ChirperCommand extends Command
{
    public $signature = 'chirper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
