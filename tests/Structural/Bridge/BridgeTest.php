<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 2:54 PM
 */

namespace PatternDesigns\Structural\Bridge;


use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    /**
     * @var Abstraction
     */
    private $jsonRender;

    /**
     * @var Abstraction
     */
    private $xmlRender;

    /**
     * @var Implementation
     */
    private $concreteImplementation;

    public function setUp()
    {
        parent::setUp();
        $this->concreteImplementation = new ConcreteImplementation();
        $this->jsonRender = new JsonRender($this->concreteImplementation);
        $this->xmlRender  = new XmlRender($this->concreteImplementation);
    }

    public function testBridge()
    {
        $this->assertEquals('{"item1":"test1","item2":"item2","item3":"item3"}', $this->jsonRender->execute());
        $this->assertTrue(strpos($this->xmlRender->execute(), '<test1>item1</test1>') > 0);
        $this->assertEquals('["test"]', (new JsonRender(new OtherConcreteImplementation()))->execute());
    }
}