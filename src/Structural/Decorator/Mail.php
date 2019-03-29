<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:46 PM
 */

namespace PatternDesigns\Structural\Decorator;


class Mail implements Notification
{
    public function send()
    {
        return 'send email';
    }
}