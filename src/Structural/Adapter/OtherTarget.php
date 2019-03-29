<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 2:10 PM
 */

namespace PatternDesigns\Structural\Adapter;


class OtherTarget extends Target
{
    /**
     * @var Adaptee
     */
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return 'Adapter translated: ' . $this->adaptee->specificRequest();
    }
}