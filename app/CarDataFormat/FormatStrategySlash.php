<?php

namespace App\CarDataFormat;

class FormatStrategySlash extends FormatStrategy
{
    public function formattingData($data)
    {
        $formatData = '';
        foreach ($data as $item => $value) {
            $itemByWords = preg_replace("([A-Z])", ' ${0}', $item);
            $itemByWords = strtolower($itemByWords);
            $formatData = $formatData . '|' . $itemByWords . '|' . $value . '|' . '<br>';
        }
        return $formatData . '_______' . '<br>';
    }
}
