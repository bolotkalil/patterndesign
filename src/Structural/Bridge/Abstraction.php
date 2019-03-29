<?php

namespace PatternDesigns\Structural\Bridge;

abstract class Abstraction
{
    /**
     * @var Implementation
     */
    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function changeImplementation(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    abstract public function execute();
}