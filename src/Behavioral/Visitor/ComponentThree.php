<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 9:09 PM
 */

namespace PatternDesigns\Behavioral\Visitor;


class ComponentThree implements ComponentInterface
{

    public function title()
    {
        return 'Component three';
    }


    public function accept(VisitorInterface $visitor)
    {
        return $visitor->componentThree($this);
    }
}