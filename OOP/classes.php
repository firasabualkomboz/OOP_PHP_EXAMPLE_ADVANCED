<?php 

class Car

{

    public $color;
    public $weight;
    private $year;

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

}

$mycar = new Car();
$mycar -> color = 'red';
$mycar -> weight = red;
$mycar -> setYear(2021);
