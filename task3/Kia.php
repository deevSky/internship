<?php

include 'Car.php';

class Kia extends Car
{
    public function introduce()
    {
        return "$this->name $this->color
        $this->year";
    }
}

$kia = new Kia("Kia", "blue", 2015);
echo $kia->introduce();
echo "<br>";