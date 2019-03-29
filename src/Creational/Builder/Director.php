<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/17/18
 * Time: 11:40 PM
 */

namespace PatternDesigns\Creational\Builder;


class Director
{
    /**
     * @var AbstractBuilder
     */
    private $builder;

    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function getFirstOperation()
    {
        return $this->builder->someFirstOperation();
    }

    public function getSecondAndFirstOperations()
    {
        return [$this->builder->someSecondOperation(), $this->builder->someFirstOperation()];
    }
}