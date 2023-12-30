<?php

namespace App\CarDataFormat;

abstract class FormatStrategy implements FormatInterface
{
    private $fileData;

    abstract protected function formatData($item, $value);

    private function createFileName()
    {
        $classFullName = get_called_class();
        $classToArray = explode('\\', $classFullName);
        $className = $classToArray[count($classToArray) - 1];

        $currentDate = date('Y-m-d');

        return $className . '_' . $currentDate . '.txt';
    }

    public function setFileData($object)
    {
        $sourceData = '';

        foreach ($object as $item => $value) {
            $sourceData = $sourceData . $this->formatData($item, $value);
        }
        $sourceData = $sourceData . "_______" . "\r\n";

        $this->fileData = $this->fileData . $sourceData;
        return $this;
    }

    public function execute()
    {
        return ['name' => $this->createFileName(), 'text' => $this->fileData];
    }
}
