<?php

namespace PatternDesigns\Behavioral\Chain;

class Chain implements Handler
{
    /**
     * @var Handler[]
     */
    private $handlers;

    public function append(Handler $handler)
    {
        $this->handlers[] = $handler;
        return $this;
    }

    public function handle()
    {
        $result = [];
        foreach ($this->handlers as $handler)
        {
            $return = $handler->handle();
            if (empty($return)) break;
            $result[] = $return;
        }
        return $result;
    }
}