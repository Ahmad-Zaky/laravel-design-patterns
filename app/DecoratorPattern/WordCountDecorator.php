<?php

namespace App\DecoratorPattern;

use Illuminate\Support\Str;

class WordCountDecorator extends TextFormat
{
    public function format(string $text, $options = []): string
    {
        if (! empty($options)) $this->options = $options;

        $text = parent::format($text, $options);
        
        return Str::wordCount($text);
    }
}