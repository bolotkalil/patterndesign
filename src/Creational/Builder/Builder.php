<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/17/18
 * Time: 11:40 PM
 */

namespace PatternDesigns\Creational\Builder;


class Builder extends AbstractBuilder
{
    public function someFirstOperation()
    {
        return 'First operation';
    }

    public function someSecondOperation()
    {
        return 'Second operation';
    }
}