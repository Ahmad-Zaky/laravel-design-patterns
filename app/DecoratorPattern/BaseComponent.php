<?php

namespace App\DecoratorPattern;

class BaseComponent implements TextFormatter
{
    public function format(string $text, $options = []): string
    {
        if (! empty($options)) $this->options = $options;

        return $text;
    }
}