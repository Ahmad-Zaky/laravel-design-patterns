<?php

namespace App\DecoratorPattern;

class TrimDecorator extends TextFormat
{
    protected string $ws = "\t\n\r\0\x0B";

    public function format(string $text, $options = []): string
    {
        if (! empty($options)) $this->options = $options;

        $text = parent::format($text, $options);
        
        $symbol = isset($options["symbol"]) ? $options["symbol"] : " \t\n\r\0\x0B";

        return trim($text, $symbol . $this->ws);
    }
}