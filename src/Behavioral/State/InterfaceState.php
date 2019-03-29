<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:06 PM
 */

namespace PatternDesigns\Behavioral\State;


interface InterfaceState
{
    public function go();
    public function stop();
}