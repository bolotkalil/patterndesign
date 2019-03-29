<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 2:59 PM
 */

namespace PatternDesigns\Structural\Bridge;


class JsonRender extends Abstraction
{
    public function execute()
    {
        return json_encode($this->implementation->test());
    }
}