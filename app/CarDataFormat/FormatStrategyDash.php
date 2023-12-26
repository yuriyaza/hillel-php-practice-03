<?php

namespace App\CarDataFormat;

class FormatStrategyDash extends FormatStrategy
{
    protected function formatData($item, $value)
    {
        return $item . " - " . $value . "\r\n";
    }
}
