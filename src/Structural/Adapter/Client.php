<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 2:19 PM
 */

namespace PatternDesigns\Structural\Adapter;


class Client
{
    private $target;
    public function __construct(Target $target)
    {
        $this->target = $target;
    }

    public function request()
    {
        return $this->target->request();
    }
}