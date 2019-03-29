<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 4:04 PM
 */

namespace PatternDesigns\Behavioral\Mediator;

class Mediator implements InterfaceMediator
{
    public function notify()
    {
        return 'notify';
    }
}