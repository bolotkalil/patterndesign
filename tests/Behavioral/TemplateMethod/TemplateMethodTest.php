<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 8:28 PM
 */

namespace PatternDesigns\Behavioral\TemplateMethod;


use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    /**
     * @var TemplateMethod
     */
    private $template;
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->template = new TemplateMethod();
    }

    public function testTemplateMethod()
    {
        $this->assertEquals('test', $this->template->execute());
    }
}