<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 9:05 PM
 */

namespace PatternDesigns\Behavioral\Visitor;


class Visitor implements VisitorInterface
{
    public function componentOne($componentOne)
    {
        return $componentOne->title();
    }

    public function componentTwo($componentSecond)
    {
        return $componentSecond->title();
    }

    public function componentThree($componentThree)
    {
        return $componentThree->title();
    }
}