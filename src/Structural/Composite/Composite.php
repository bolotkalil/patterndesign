<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/19/18
 * Time: 11:21 PM
 */

namespace PatternDesigns\Structural\Composite;


class Composite extends AbstractComposite
{
    /**
     * @var Composite[]
     */
    private $children;

    public function append(AbstractComposite $composite)
    {
        $this->children[] = $composite;
        return $this;
    }

    public function remove(AbstractComposite $composite)
    {
        $this->children = array_filter($this->children, function($child) use ($composite) {
            return $child == $composite;
        });
        return $this;
    }

    public function execute()
    {
        $result = [];

        foreach ($this->children as $child)
        {
            $result[] = $child->execute();
        }

        return $result;
    }

    public function isComposite()
    {
        return true;
    }
}