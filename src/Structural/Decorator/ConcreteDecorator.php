<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:45 PM
 */

namespace PatternDesigns\Structural\Decorator;


class ConcreteDecorator extends Decorator
{
    public function send()
    {
        return 'Concrete decorator: ' . parent::send();
    }
}