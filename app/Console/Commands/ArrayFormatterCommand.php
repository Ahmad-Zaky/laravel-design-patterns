<?php

namespace App\Console\Commands;

use App\FactoryPattern\FormatterFactory;
use Illuminate\Console\Command;

class ArrayFormatterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'format:array {formatter}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Format an array to a specified format type.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $formatter =  (new FormatterFactory)->getFormatter($this->argument('formatter'));

        $this->info($formatter->format([
            'data 1',
            'data 2',
            'data 3',
            'key' => 'value',
        ]));

        return Command::SUCCESS;
    }
}
