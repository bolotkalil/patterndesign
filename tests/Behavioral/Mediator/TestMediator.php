<?php

namespace PatternDesigns\Behavioral\Mediator;

use PHPUnit\Framework\TestCase;

class TestMediator extends TestCase
{
    /**
     * @var Mediator
     */
    private $mediator;

    public function setUp()
    {
        parent::setUp();
        $this->mediator = new Mediator();
    }

    public function testMediator()
    {

    }
}