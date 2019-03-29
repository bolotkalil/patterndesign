<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 9:04 PM
 */

namespace PatternDesigns\Behavioral\Visitor;


interface VisitorInterface
{
    public function componentOne(ComponentOne $componentOne);
    public function componentTwo(ComponentSecond $componentSecond);
    public function componentThree(ComponentThree $componentThree);
}