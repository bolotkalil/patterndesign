<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 2:58 PM
 */

namespace PatternDesigns\Behavioral\Command;


class Command implements InterfaceCommand
{
    /**
     * @var Receiver
     */
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->execute();
    }
}