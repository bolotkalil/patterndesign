<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/17/18
 * Time: 11:37 PM
 */

namespace PatternDesigns\Creational\Builder;


use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @var AbstractBuilder
     */
    private $builder;

    /**
     * @var Director
     */
    private $directory;
    public function setUp()
    {
        parent::setUp();
        $this->builder = new Builder();
        $this->directory = new Director($this->builder);
    }

    public function testBuilderAndDirectory()
    {
        $this->assertEquals('First operation', $this->directory->getFirstOperation());
        $this->assertEquals(['Second operation', 'First operation'], $this->directory->getSecondAndFirstOperations());
    }
}