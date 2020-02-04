<?php

abstract class Car
{
    public $name;
    public $color;
    public $year;

    public function __construct($name, $color, $year)
    {
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
    }

    abstract public function introduce();
}
