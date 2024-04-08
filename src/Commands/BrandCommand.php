<?php

namespace AdminKit\Brand\Commands;

use Illuminate\Console\Command;

class BrandCommand extends Command
{
    public $signature = 'admin-kit-brand';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
