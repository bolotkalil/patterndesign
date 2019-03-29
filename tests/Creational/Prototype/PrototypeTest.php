<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 12:01 AM
 */

namespace PatternDesigns\Creational\Prototype;


use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * @var Prototype
     */
    private $prototype;

    public function setUp()
    {
        parent::setUp();
        $this->prototype = new Prototype();
    }

    public function testPrototype()
    {
        $this->prototype->someOperation();
        $this->assertEquals('this original some operation', $this->prototype->getSomeOperation());
        $newOperation = clone $this->prototype;
        $this->assertEquals('this original some operation prototype', $newOperation->getSomeOperation());
    }

}