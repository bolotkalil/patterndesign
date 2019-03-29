<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 7:27 PM
 */

namespace PatternDesigns\Behavioral\Observer;


use PHPUnit\Framework\TestCase;
use SplSubject;

class ObserverTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testObserver()
    {
        $this->expectOutputString('Observer');
        $subject = new Subject();
        $subject->attach(new Observer());
        $subject->notify();
    }
}