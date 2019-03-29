<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 12:02 AM
 */

namespace PatternDesigns\Creational\Prototype;

class Prototype
{
    private $someOperation;

    public function someOperation()
    {
        $this->someOperation = "this original some operation";
    }

    public function getSomeOperation()
    {
        return $this->someOperation;
    }

    public function __clone()
    {
        $this->someOperation = $this->someOperation . ' prototype';
    }

}