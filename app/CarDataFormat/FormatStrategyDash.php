<?php

namespace App\CarDataFormat;

class FormatStrategyDash extends FormatStrategy
{
    public function formattingData($data)
    {
        $formatData = '';
        foreach ($data as $item => $value) {
            $formatData = $formatData . $item . ' - ' . $value . '<br>';
        }
        return $formatData . '_______' . '<br>';
    }
}
