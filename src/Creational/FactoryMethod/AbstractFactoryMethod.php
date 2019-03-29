<?php

namespace PatternDesigns\Creational\FactoryMethod;

abstract class AbstractFactoryMethod
{
    abstract public function getFactory($factory);
}