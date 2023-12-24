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
        $strategyResult = [];
        foreach ($this->objects as $object) {
            array_push($strategyResult, $this->strategy->execute($object));
        }
        return $strategyResult;
    }
}
