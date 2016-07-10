<?php

class toString
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * __toStringメソッドはこのメソッド内で定義された値を返してくれるマジックメソッド
     *
     */
    public function __toString()
    {
        return $this->getName();
    }
}