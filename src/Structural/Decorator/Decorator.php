<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:45 PM
 */

namespace PatternDesigns\Structural\Decorator;


class Decorator implements Notification
{
    /**
     * @var Notification
     */
    protected $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send()
    {
        return $this->notification->send();
    }
}