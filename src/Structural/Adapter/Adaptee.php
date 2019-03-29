<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 2:15 PM
 */

namespace PatternDesigns\Structural\Adapter;


class Adaptee
{
    public function specificRequest()
    {
        return 'Adaptee specific request';
    }
}