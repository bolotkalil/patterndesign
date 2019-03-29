<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:17 PM
 */

namespace PatternDesigns\Structural\Composite;

abstract class AbstractComposite
{

    public function append(AbstractComposite $composite){}
    public function remove(AbstractComposite $composite){}

    abstract public function execute();

    public function isComposite()
    {
        return false;
    }
}