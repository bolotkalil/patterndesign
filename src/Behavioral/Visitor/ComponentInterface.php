<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 9:07 PM
 */

namespace PatternDesigns\Behavioral\Visitor;


interface ComponentInterface
{
    public function accept(VisitorInterface $visitor);
}