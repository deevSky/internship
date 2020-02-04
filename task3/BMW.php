<?php

include_once 'Car.php';

class BMW extends Car
{
    public function introduce()
    {
        return "$this->name $this->color
                $this->year";
    }
}

$bmw = new BMW('BMW', 'white', 2019);
echo $bmw->introduce();
echo '<br>';