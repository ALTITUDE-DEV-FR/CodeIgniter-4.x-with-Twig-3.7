<?php 

// This file is present in ThirdParty/TwigExtensions/JsonDecodeExtension.php

namespace App\ThirdParty\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class JsonDecodeExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('json_decode', [$this, 'jsonDecode']),
        ];
    }

    public function jsonDecode($string)
    {
        return json_decode($string);
    }
}
