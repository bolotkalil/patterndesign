<?php

namespace PatternDesigns\Structural\Adapter;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testClient()
    {
        $this->assertEquals('Target request', (new Client(new Target()))->request());
        $this->assertEquals('Adapter translated: Adaptee specific request', (new Client(new OtherTarget(new Adaptee())))->request());
    }
}