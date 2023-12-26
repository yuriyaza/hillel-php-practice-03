<?php

namespace App\CarDataFormat;

class FormatStrategySlash extends FormatStrategy
{
    protected function formatData($item, $value)
    {
        $itemByWords = preg_replace("([A-Z])", ' ${0}', $item);
        $itemByLowerWords = strtolower($itemByWords);
        return "|" . $itemByLowerWords . "|" . $value . "|" . "\r\n";
    }
}
