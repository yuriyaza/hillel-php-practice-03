<?php

namespace App\CarDataFormat;

abstract class FormatStrategy implements FormatInterface
{
    private $sourceData;
    private $resultFile;

    abstract protected function formatData($item, $value);

    private function createFileName()
    {
        $classFullName = get_called_class();
        $classToArray = explode('\\', $classFullName);
        $className = $classToArray[count($classToArray) - 1];

        $currentDate = date('Y-m-d');

        return $className . '_' . $currentDate . '.txt';
    }

    public function setSourceData($object)
    {
        $sourceData = '';

        foreach ($object as $item => $value) {
            $sourceData = $sourceData . $this->formatData($item, $value);
        }
        $sourceData = $sourceData . "_______" . "\r\n";

        $this->sourceData = $this->sourceData . $sourceData;
        return $this;
    }

    public function getResultFile()
    {
        $this->resultFile = ['name' => $this->createFileName(), 'text' => $this->sourceData];
        return $this->resultFile;
    }
}
