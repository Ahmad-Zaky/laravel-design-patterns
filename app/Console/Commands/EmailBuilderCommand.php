<?php

namespace App\Console\Commands;

use App\BuilderPattern\Email;
use Illuminate\Console\Command;

class EmailBuilderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email Builder Demonstration';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email1 = (new Email(["first@mail.com"]))
            ->addCc("cc@email.com")
            ->addBcc("bcc@email.com");

        $email2 = (new Email(["seccond@mail.com"]))
            ->addCc("cc1@email.com")
            ->addCc("cc2@email.com")
            ->addBcc("bcc@email.com");

        $this->info($email1);
        $this->info($email2);
        
        return Command::SUCCESS;
    }
}
