<?php

namespace InkomoMutane\Modularise\Commands;

use Illuminate\Console\Command;

class ModulariseCommand extends Command
{
    public $signature = 'modularise';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
