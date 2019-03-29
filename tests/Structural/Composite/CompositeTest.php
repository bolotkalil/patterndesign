<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 9:00 PM
 */

namespace PatternDesigns\Structural\Composite;


use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    /**
     * @var Composite
     */
    private $composite;
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->composite = new Composite();
    }

    public function testComposite()
    {
        $composite = new class extends AbstractComposite
        {
            public function execute()
            {
                return 'test';
            }
        };
        $this->composite->append($composite);
        $this->assertEquals(['test'], $this->composite->execute());
    }


}