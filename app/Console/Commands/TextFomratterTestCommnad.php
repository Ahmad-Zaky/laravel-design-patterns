<?php

namespace App\Console\Commands;

use App\DecoratorPattern\BaseComponent;
use App\DecoratorPattern\MentionDecorator;
use App\DecoratorPattern\TrimDecorator;
use App\DecoratorPattern\WordCountDecorator;
use Illuminate\Console\Command;

class TextFomratterTestCommnad extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'format:text {text?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Decorator Pattern With Text Formatter Example';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $text = <<<FORMATME
        ****Hello, world!
        This is a last.
        @zaky this has extra spaces.******

        FORMATME;
        
        $options = [ "symbol" => "*" ];

        if ($this->argument("text")) {
            $text = $this->argument('text');
        }

        $base = new BaseComponent; // Base Decorator
        $trimDecorator = new TrimDecorator($base); // Trim Decorator
        $mentionDecorator = new MentionDecorator($trimDecorator); // Mention Decorator
        $wordCountDecorator = new WordCountDecorator($mentionDecorator); // Word Count Decorator
 
        $this->info(
            "Final Formatted Text:"
            . PHP_EOL . PHP_EOL .
            $mentionDecorator->format($text, $options) 
            . PHP_EOL . PHP_EOL .
            "Word Count:". $wordCountDecorator->format($text, $options)
        );

        return Command::SUCCESS;
    }
}
