<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:49 PM
 */

namespace PatternDesigns\Behavioral\Visitor;


use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var Visitor
     */
    private $visitor;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->visitor = new Visitor();
    }

    public function testVisitor()
    {
        $componentOne    = new ComponentOne();
        $componentSecond = new ComponentSecond();
        $componentThree = new ComponentThree();
        $this->assertEquals('Component one', $componentOne->accept(new Visitor()));
        $this->assertEquals('Component second', $componentSecond->accept(new Visitor()));
        $this->assertEquals('Component three', $componentThree->accept(new Visitor()));
    }
}