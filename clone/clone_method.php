<?php

class clone_method
{
    public $name;

    public function __clone()
    {
        $this->name = clone $this->name;
    }
}