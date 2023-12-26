<?php

namespace App\CarDataFormat;

abstract class FormatStrategy implements FormatInterface
{
    abstract protected function formatData($item, $value);

    private function createFileName()
    {
        $classFullName = get_called_class();
        $classToArray = explode('\\', $classFullName);
        $className = $classToArray[count($classToArray) - 1];

        $currentDate = date('Y-m-d');

        return $className . '_' . $currentDate . '.txt';
    }

    private function createFileBody($objects)
    {
        $fileBody = '';
        foreach ($objects as $object) {
            foreach ($object as $item => $value) {
                $fileBody = $fileBody . $this->formatData($item, $value);
            }
            $fileBody = $fileBody . "_______" . "\r\n";
        }
        return $fileBody;
    }

    public function execute($objects)
    {
        return ['name' => $this->createFileName(), 'text' => $this->createFileBody($objects)];
    }
}
