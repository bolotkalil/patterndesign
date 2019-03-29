<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/18/18
 * Time: 3:00 PM
 */

namespace PatternDesigns\Structural\Bridge;

use SimpleXMLElement;

class XmlRender extends Abstraction
{
    public function execute()
    {
        $xml = new SimpleXMLElement('<root/>');
        $items = $this->implementation->test();
        array_walk_recursive($items, array ($xml, 'addChild'));
        return $xml->asXML();
    }
}