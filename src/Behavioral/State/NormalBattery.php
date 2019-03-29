<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:09 PM
 */

namespace PatternDesigns\Behavioral\State;


class NormalBattery implements InterfaceState
{

    public function go()
    {
        return 'forward';
    }

    public function stop()
    {
        return 'stopped';
    }
}