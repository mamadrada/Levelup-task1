<?php

use HtmlSanitizer\Sanitizer;


class TextPurifier
{
    private $sanitizer;
    
    public function __construct()
    {
        $this->sanitizer = Sanitizer::create(['extensions' => ['basic']]);
    }

    public function purify(String $str): String
    {
        return $this->sanitizer->sanitize($this->stripUnwantedCharacters($str));
    }
    public function stripUnwantedCharacters(String $str): String
    {
        return str_replace(['!', '@', '#', '$', '%', '^', '&', '*'], '', $str);
    }
}