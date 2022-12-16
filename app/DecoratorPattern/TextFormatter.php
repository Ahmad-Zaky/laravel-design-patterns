<?php

namespace App\DecoratorPattern;

interface TextFormatter {

    public function format(string $text, array $options): string;
}