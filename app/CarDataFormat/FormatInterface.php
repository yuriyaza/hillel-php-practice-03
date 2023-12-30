<?php

namespace App\CarDataFormat;

interface FormatInterface
{
    public function setFileData($object);
    public function execute();
}
