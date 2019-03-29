<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/21/18
 * Time: 2:42 PM
 */

namespace PatternDesigns\Algorithm\Bubble;


use PHPUnit\Framework\TestCase;

class BubbleTest extends TestCase
{
    /**
     * @var Bubble
     */
    private $bubble;
    public function setUp()
    {
        parent::setUp();
        $this->bubble = new Bubble();
    }

    public function testBubble()
    {
        $this->assertEquals([1,2,3,4,5,6,7], $this->bubble->sort([5,4,3,2,1,6,7]));
    }
}