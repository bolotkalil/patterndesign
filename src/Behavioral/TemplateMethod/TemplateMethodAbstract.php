<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:29 PM
 */

namespace PatternDesigns\Behavioral\TemplateMethod;


abstract class TemplateMethodAbstract
{
    private $property;

    public function get()
    {
        return $this->property;
    }

    public function set($property)
    {
        $this->property = $property;
    }

    abstract public function execute();
}