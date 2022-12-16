<?php

namespace App\DecoratorPattern;

class TextFormat implements TextFormatter
{
    protected array $options = [];

    public function __construct(private TextFormatter $formatter) {}

    public function format(string $text, array $options = []): string
    {
        if (! empty($options)) $this->options = $options;

        return $this->formatter->format($text, $this->options);
    }
}
