<?php

namespace App\CarDataFormat;

interface FormatInterface
{
    public function setSourceData($object);
    public function getResultFile();
}
