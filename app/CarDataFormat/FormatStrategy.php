<?php

namespace App\CarDataFormat;

abstract class FormatStrategy implements FormatInterface
{
    public function createFileName()
    {
        $classFullName = get_called_class();
        $classToArray = explode('\\', $classFullName);
        $className = $classToArray[count($classToArray) - 1];

        $currentDate = date('Y-m-d');

        return $className . '_' . $currentDate . '.txt';
    }

    public function execute($object)
    {
        return ['name' => $this->createFileName(), 'text' => $this->formattingData($object)];
    }
}
