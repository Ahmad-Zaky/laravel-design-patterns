<?php

namespace App\BuilderPattern;

class Email {

    private array $cc = [];

    private array $bcc = [];

    public function __construct(private array $to) {}

    public function addCc(string $email): self
    {
        $this->cc[] = $email;

        return $this;
    }

    public function addBcc(string $email): self
    {
        $this->bcc[] = $email;

        return $this;
    }

    public function __toString() 
    {
        return "This Email is to: ". implode(", ", $this->to) ."\ncc: ". implode(", ", $this->cc) ."\nbcc: ". implode(", ", $this->bcc) ."\n\n"; 
    }
}