<?php

namespace Cart53\AdminPanel\Commands;

use Illuminate\Console\Command;

class AdminPanelCommand extends Command
{
    public $signature = 'adminpanel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
