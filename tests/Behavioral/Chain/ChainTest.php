<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:57 PM
 */

namespace PatternDesigns\Behavioral\Chain;

use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testChain()
    {
        $chainFirst = new class implements Handler
        {
            public function handle()
            {
                return 'first chain';
            }
        };

        $chainSecond = new class implements Handler
        {
            public function handle()
            {
                return false;
            }
        };

        $chainThird = new class implements Handler
        {
            public function handle()
            {
                return 'third chain';
            }
        };

        $chain = new Chain();
        $chain->append($chainFirst)
            ->append($chainSecond)
            ->append($chainThird);
        $this->assertEquals(['first chain'], $chain->handle());
    }

}