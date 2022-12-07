<?php

namespace App\FactoryPattern;

interface Formatter
{
    public function format(array $data): string;
}