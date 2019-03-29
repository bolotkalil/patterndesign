<?php

namespace PatternDesigns\Creational\FactoryMethod;

class FactoryMethod extends AbstractFactoryMethod
{
    public function getFactory($factory)
    {
        return new $factory();
    }
}