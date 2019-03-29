<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 3:05 PM
 */

namespace PatternDesigns\Structural\Bridge;


class ConcreteImplementation implements Implementation
{
    public function test()
    {
        return ['item1'=>'test1', 'item2'=>'item2', 'item3'=>'item3'];
    }
}