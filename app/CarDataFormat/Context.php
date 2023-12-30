<?php

namespace App\CarDataFormat;

class Context
{
    private $objects;
    private $strategy;

    public function __construct($objects)
    {
        $this->objects = $objects;
        return $this;
    }

    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
        return $this;
    }

    public function executeStrategy()
    {
        foreach ($this->objects as $object) {
            $this->strategy->setFileData($object);
        }
        return $this->strategy->execute();
    }
}
