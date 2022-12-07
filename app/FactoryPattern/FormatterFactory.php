<?php

namespace App\FactoryPattern;

class FormatterFactory
{
    public function getFormatter(string $formatter): Formatter 
    {
        return match ($formatter) {
            'json' => new JsonFormatter,
            'xml' => new XmlFormatter,
            default => throw new \InvalidArgumentException('Please use a different formatting type.'),
        };
    }
}