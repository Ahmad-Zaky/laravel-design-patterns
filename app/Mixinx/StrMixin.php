<?php

namespace App\Mixinx;

class StrMixin
{
    public function replaceRegex()
    {
        return function (
            array|string $pattern,
            array|string $replacement,
            array|string $subject,
            int $limit=-1,
            &$count=NULL
        ): array|string|null
        {
            return preg_replace($pattern, $replacement, $subject, $limit, $count);
        };
    }
}