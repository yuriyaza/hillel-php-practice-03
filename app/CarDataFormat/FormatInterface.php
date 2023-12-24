<?php

namespace App\CarDataFormat;

interface FormatInterface
{
    public function createFileName();

    public function formattingData($data);

    public function execute($object);
}
