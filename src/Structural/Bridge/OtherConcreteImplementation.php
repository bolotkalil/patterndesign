<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 3:05 PM
 */

namespace PatternDesigns\Structural\Bridge;


class OtherConcreteImplementation implements Implementation
{
    public function test()
    {
        return ['test'];
    }
}