<?php

namespace App\DecoratorPattern;

use Illuminate\Support\Str;

class MentionDecorator extends TextFormat
{
    protected string $regex = "/(^|\s)@([\w.]+)/";
    protected string $link = "$1<a href=\"/username/$2\">@$2</a> ";

    public function format(string $text, array $options = []): string
    {
        if (! empty($options)) $this->options = $options;

        $text = parent::format($text, $options);

        return Str::replaceRegex($this->regex, $this->link, $text);
    }
}