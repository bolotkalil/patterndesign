<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:10 PM
 */

namespace PatternDesigns\Behavioral\State;


class State
{
    /**
     * @var InterfaceState
     */
    private $state;

    public function __construct(InterfaceState $state)
    {
        $this->state = $state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function execute($cmd)
    {
        return call_user_func([$this->state, $cmd]);
    }
}