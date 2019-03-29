<?php

namespace PatternDesigns\Structural\Decorator;

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @var Decorator
     */
    private $decorator;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->decorator = new Decorator(new Mail());
    }

    public function testDecorator()
    {
        $this->assertEquals('send email', $this->decorator->send());
        $this->assertEquals('Concrete decorator: send email', (new ConcreteDecorator(new Mail()))->send());
    }
}