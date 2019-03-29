<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 12:17 AM
 */

namespace PatternDesigns\Creational\Singleton;


class Singleton
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (empty(self::$instance)) self::$instance = new self;
        return self::$instance;
    }

    private function __clone()
    {
    }

}